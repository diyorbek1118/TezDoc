<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FileConvertController extends Controller
{
    private array $conversionMap = [
        'pdf'  => 'docx',
        'docx' => 'pdf',
        'doc'  => 'pdf',
    ];

    private int $maxSizeBytes = 20 * 1024 * 1024;

    private string $sofficeBin = '/usr/bin/soffice';

    public function __construct()
    {
        foreach (['/usr/bin/soffice', '/usr/local/bin/soffice', '/opt/libreoffice7.4/program/soffice'] as $path) {
            if (file_exists($path)) {
                $this->sofficeBin = $path;
                break;
            }
        }
    }

    public function index()
    {
        return view('file-convert.index');
    }

    public function convert(Request $request)
    {
        // PHP max execution time ni oshirish
        set_time_limit(600);

        $request->validate([
            'file' => [
                'required',
                'file',
                'max:' . ($this->maxSizeBytes / 1024),
                function ($attribute, $value, $fail) {
                    $ext = strtolower($value->getClientOriginalExtension());
                    if (!array_key_exists($ext, $this->conversionMap)) {
                        $fail("Faqat PDF, DOC yoki DOCX fayllar qabul qilinadi.");
                    }
                },
            ],
        ], [
            'file.required' => 'Fayl tanlanmagan.',
            'file.file'     => "Noto'g'ri fayl.",
            'file.max'      => 'Fayl hajmi 20 MB dan oshmasligi kerak.',
        ]);

        $uploadedFile = $request->file('file');
        $inputExt     = strtolower($uploadedFile->getClientOriginalExtension());
        $outputExt    = $this->conversionMap[$inputExt];
        $originalName = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);

        $tmpDir     = storage_path('app/conversions/' . Str::uuid());
        mkdir($tmpDir, 0755, true);

        $inputPath  = $tmpDir . '/input.' . $inputExt;
        $outputPath = $tmpDir . '/output.' . $outputExt;

        $uploadedFile->move($tmpDir, 'input.' . $inputExt);

        try {
            $this->runConversion($inputPath, $outputPath, $inputExt, $outputExt, $tmpDir);
        } catch (\Exception $e) {
            $this->cleanupDir($tmpDir);
            return back()->withInput()->with('error', 'Konvertatsiya amalga oshmadi: ' . $e->getMessage());
        }

        if (!file_exists($outputPath) || filesize($outputPath) === 0) {
            $this->cleanupDir($tmpDir);
            return back()->withInput()->with('error', 'Konvertatsiya muvaffaqiyatsiz yakunlandi. Fayl chiqmadi.');
        }

        $downloadName = $originalName . '.' . $outputExt;

        register_shutdown_function(function () use ($tmpDir) {
            $this->cleanupDir($tmpDir);
        });

        return response()->download($outputPath, $downloadName, [
            'Content-Type' => $this->mimeType($outputExt),
        ]);
    }

    private function runConversion(
        string $inputPath,
        string $outputPath,
        string $inputExt,
        string $outputExt,
        string $tmpDir
    ): void {
        if (in_array($inputExt, ['doc', 'docx']) && $outputExt === 'pdf') {
            $this->docxToPdf($inputPath, $tmpDir, $outputPath);
        } elseif ($inputExt === 'pdf' && $outputExt === 'docx') {
            $this->pdfToDocx($inputPath, $tmpDir, $outputPath);
        } else {
            throw new \RuntimeException("Qo'llab-quvvatlanmagan konvertatsiya: {$inputExt} -> {$outputExt}");
        }
    }

    // ─── DOC / DOCX → PDF ────────────────────────────────────────────────────

    private function docxToPdf(string $inputPath, string $tmpDir, string $outputPath): void
    {
        $cmd = sprintf(
            'HOME=/tmp %s --headless --norestore --nofirststartwizard '
            . '--convert-to pdf:writer_pdf_Export '
            . '--outdir %s %s 2>&1',
            escapeshellarg($this->sofficeBin),
            escapeshellarg($tmpDir),
            escapeshellarg($inputPath)
        );

        $this->executeCommand($cmd, 180);

        $candidates = [
            $tmpDir . '/' . pathinfo($inputPath, PATHINFO_FILENAME) . '.pdf',
            $tmpDir . '/input.pdf',
        ];

        foreach ($candidates as $candidate) {
            if (file_exists($candidate) && filesize($candidate) > 0) {
                if ($candidate !== $outputPath) {
                    rename($candidate, $outputPath);
                }
                return;
            }
        }

        throw new \RuntimeException('LibreOffice PDF fayl yaratmadi.');
    }

    // ─── PDF → DOCX ──────────────────────────────────────────────────────────

    private function pdfToDocx(string $inputPath, string $tmpDir, string $outputPath): void
    {
        // 1-qadam: PDF → ODT
        $odtPath = $tmpDir . '/input.odt';

        $cmd1 = sprintf(
            'HOME=/tmp %s --headless --norestore --nofirststartwizard '
            . '--infilter="writer_pdf_import" '
            . '--convert-to odt '
            . '--outdir %s %s 2>&1',
            escapeshellarg($this->sofficeBin),
            escapeshellarg($tmpDir),
            escapeshellarg($inputPath)
        );

        $this->executeCommand($cmd1, 240);

        // 2-qadam: ODT → DOCX
        if (file_exists($odtPath) && filesize($odtPath) > 0) {
            $cmd2 = sprintf(
                'HOME=/tmp %s --headless --norestore --nofirststartwizard '
                . '--convert-to docx '
                . '--outdir %s %s 2>&1',
                escapeshellarg($this->sofficeBin),
                escapeshellarg($tmpDir),
                escapeshellarg($odtPath)
            );

            $this->executeCommand($cmd2, 180);

            $generated = $tmpDir . '/input.docx';
            if (file_exists($generated) && filesize($generated) > 0) {
                rename($generated, $outputPath);
                return;
            }
        }

        // Fallback: to'g'ridan-to'g'ri PDF → DOCX
        $cmd3 = sprintf(
            'HOME=/tmp %s --headless --norestore --nofirststartwizard '
            . '--convert-to "docx:MS Word 2007 XML" '
            . '--outdir %s %s 2>&1',
            escapeshellarg($this->sofficeBin),
            escapeshellarg($tmpDir),
            escapeshellarg($inputPath)
        );

        $this->executeCommand($cmd3, 240);

        $fallback = $tmpDir . '/input.docx';
        if (file_exists($fallback) && filesize($fallback) > 0) {
            rename($fallback, $outputPath);
            return;
        }

        throw new \RuntimeException('LibreOffice DOCX fayl yaratmadi.');
    }

    // ─── Shell executor ───────────────────────────────────────────────────────

    private function executeCommand(string $cmd, int $timeout = 180): string
    {
        $descriptors = [
            0 => ['pipe', 'r'],
            1 => ['pipe', 'w'],
            2 => ['pipe', 'w'],
        ];

        $process = proc_open($cmd, $descriptors, $pipes);

        if (!is_resource($process)) {
            throw new \RuntimeException('Jarayon ishga tushirilmadi. proc_open() ishlamadi.');
        }

        fclose($pipes[0]);

        stream_set_blocking($pipes[1], false);
        stream_set_blocking($pipes[2], false);

        $stdout   = '';
        $stderr   = '';
        $start    = time();
        $exitCode = 0;

        while (true) {
            $status = proc_get_status($process);

            if (!$status['running']) {
                $stdout  .= stream_get_contents($pipes[1]);
                $stderr  .= stream_get_contents($pipes[2]);
                $exitCode = $status['exitcode'];
                break;
            }

            if ((time() - $start) >= $timeout) {
                proc_terminate($process, 9);
                fclose($pipes[1]);
                fclose($pipes[2]);
                proc_close($process);
                throw new \RuntimeException("Konvertatsiya {$timeout} soniyada tugamadi (timeout).");
            }

            usleep(200_000); // 200ms — CPU yukini kamaytirish
        }

        fclose($pipes[1]);
        fclose($pipes[2]);
        proc_close($process);

        if ($exitCode !== 0) {
            $errorMsg = trim($stderr ?: $stdout);
            throw new \RuntimeException('LibreOffice xatolik qaytardi: ' . $errorMsg);
        }

        return $stdout;
    }

    // ─── Helpers ─────────────────────────────────────────────────────────────

    private function cleanupDir(string $dir): void
    {
        if (!is_dir($dir)) return;

        foreach (scandir($dir) as $item) {
            if ($item === '.' || $item === '..') continue;
            $path = $dir . DIRECTORY_SEPARATOR . $item;
            is_dir($path) ? $this->cleanupDir($path) : unlink($path);
        }
        rmdir($dir);
    }

    private function mimeType(string $ext): string
    {
        return match ($ext) {
            'pdf'  => 'application/pdf',
            'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'doc'  => 'application/msword',
            default => 'application/octet-stream',
        };
    }
}