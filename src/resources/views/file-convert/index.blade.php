{{-- resources/views/file-convert/index.blade.php --}}
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fayl Konvertatsiya</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #f0f2f5;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .convert-container {
            background: white;
            border-radius: 20px;
            padding: 40px;
            max-width: 680px;
            width: 100%;
            box-shadow: 0 20px 60px rgba(0,0,0,0.12);
        }

        .convert-title {
            font-size: 28px;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 8px;
        }

        .convert-subtitle {
            color: #718096;
            font-size: 15px;
            margin-bottom: 32px;
        }

        /* Format badges */
        .format-row {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 28px;
            flex-wrap: wrap;
        }

        .format-badge {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 13px;
            font-weight: 600;
        }

        .badge-pdf  { background: #FFF5F5; color: #E53E3E; border: 1px solid #FEB2B2; }
        .badge-docx { background: #EBF8FF; color: #2B6CB0; border: 1px solid #90CDF4; }
        .badge-doc  { background: #E6FFFA; color: #276749; border: 1px solid #81E6D9; }

        .arrow-icon { font-size: 18px; color: #CBD5E0; }

        /* Alerts */
        .alert {
            padding: 14px 18px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 14px;
            display: flex;
            align-items: flex-start;
            gap: 10px;
        }
        .alert-error   { background: #FFF5F5; border: 1px solid #FEB2B2; color: #C53030; }
        .alert-success { background: #F0FFF4; border: 1px solid #9AE6B4; color: #276749; }

        .alert ul { margin: 8px 0 0 18px; }
        .alert li { margin-bottom: 4px; }

        /* Drop zone */
        .drop-zone {
            border: 2px dashed #CBD5E0;
            border-radius: 14px;
            padding: 50px 20px;
            text-align: center;
            cursor: pointer;
            transition: all 0.25s ease;
            background: #FAFAFA;
            position: relative;
        }

        .drop-zone.drag-over,
        .drop-zone:hover {
            border-color: #667EEA;
            background: #EEF2FF;
        }

        .drop-icon {
            font-size: 48px;
            margin-bottom: 16px;
            display: block;
        }

        .drop-text {
            font-size: 17px;
            font-weight: 600;
            color: #2D3748;
            margin-bottom: 8px;
        }

        .drop-hint {
            font-size: 13px;
            color: #A0AEC0;
        }

        .drop-hint strong { color: #667EEA; }

        /* File preview */
        .file-preview {
            display: none;
            align-items: center;
            gap: 16px;
            margin-top: 20px;
            padding: 18px;
            background: #F7FAFC;
            border: 1px solid #E2E8F0;
            border-radius: 12px;
        }

        .file-preview.visible { display: flex; }

        .file-preview-icon {
            width: 52px;
            height: 52px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            flex-shrink: 0;
        }

        .icon-pdf  { background: #FFF5F5; }
        .icon-docx { background: #EBF8FF; }
        .icon-doc  { background: #E6FFFA; }

        .file-preview-info { flex: 1; min-width: 0; }

        .file-preview-name {
            font-size: 15px;
            font-weight: 600;
            color: #2D3748;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .file-preview-meta {
            font-size: 12px;
            color: #A0AEC0;
            margin-top: 3px;
        }

        .file-preview-arrow {
            font-size: 22px;
            color: #667EEA;
            flex-shrink: 0;
        }

        .file-preview-output {
            font-size: 13px;
            font-weight: 700;
            padding: 6px 14px;
            border-radius: 50px;
            flex-shrink: 0;
        }

        .output-pdf  { background: #FFF5F5; color: #E53E3E; }
        .output-docx { background: #EBF8FF; color: #2B6CB0; }

        .remove-btn {
            width: 32px;
            height: 32px;
            border: none;
            border-radius: 50%;
            background: #EDF2F7;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            flex-shrink: 0;
            transition: background 0.2s;
        }
        .remove-btn:hover { background: #FED7D7; }

        /* Submit button */
        .submit-wrap {
            margin-top: 28px;
        }

        .submit-btn {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #667EEA, #764BA2);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.25s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .submit-btn:hover:not(:disabled) {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.45);
        }

        .submit-btn:disabled {
            background: #CBD5E0;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        /* Spinner */
        .spinner {
            width: 18px;
            height: 18px;
            border: 2px solid rgba(255,255,255,0.4);
            border-top-color: white;
            border-radius: 50%;
            animation: spin 0.7s linear infinite;
            display: none;
        }
        @keyframes spin { to { transform: rotate(360deg); } }

        /* Info box */
        .info-box {
            margin-top: 24px;
            padding: 14px 18px;
            background: #EEF2FF;
            border-radius: 10px;
            font-size: 13px;
            color: #4C51BF;
        }

        .info-box ul { margin: 6px 0 0 18px; }
        .info-box li { margin-bottom: 4px; }

        input[type="file"] { display: none; }
    </style>
</head>
<body>

<div class="convert-container">

    <h1 class="convert-title">📄 Fayl Konvertatsiya</h1>
    <p class="convert-subtitle">DOC/DOCX faylni PDF ga, yoki PDF ni DOCX ga aylantiring</p>

    {{-- Format support badges --}}
    <div class="format-row">
        <span class="format-badge badge-pdf">📕 PDF</span>
        <span class="arrow-icon">⇄</span>
        <span class="format-badge badge-docx">📘 DOCX</span>
        <span class="arrow-icon">→</span>
        <span class="format-badge badge-pdf">📕 PDF</span>
        &nbsp;|&nbsp;
        <span class="format-badge badge-doc">📗 DOC</span>
        <span class="arrow-icon">→</span>
        <span class="format-badge badge-pdf">📕 PDF</span>
    </div>

    {{-- Error messages --}}
    @if ($errors->any())
        <div class="alert alert-error">
            <span>⚠️</span>
            <div>
                <strong>Xatolik:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-error">
            <span>⚠️</span>
            <div>{{ session('error') }}</div>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            <span>✓</span>
            <div>{{ session('success') }}</div>
        </div>
    @endif

    {{-- Form --}}
    <form id="convertForm"
          action="{{ route('file.convert') }}"
          method="POST"
          enctype="multipart/form-data">
        @csrf

        {{-- Drop zone --}}
        <div class="drop-zone" id="dropZone"
             onclick="document.getElementById('fileInput').click();">
            <span class="drop-icon">📂</span>
            <div class="drop-text">Faylni bu yerga tashlang yoki bosing</div>
            <div class="drop-hint">
                Qo'llab-quvvatlanadiganlar: <strong>PDF, DOC, DOCX</strong>
                &nbsp;·&nbsp; Maksimal hajm: <strong>20 MB</strong>
            </div>
        </div>

        <input type="file"
               id="fileInput"
               name="file"
               accept=".pdf,.doc,.docx">

        {{-- File preview --}}
        <div class="file-preview" id="filePreview">
            <div class="file-preview-icon" id="fileIcon">📄</div>
            <div class="file-preview-info">
                <div class="file-preview-name" id="fileName">—</div>
                <div class="file-preview-meta" id="fileMeta">—</div>
            </div>
            <span class="file-preview-arrow">→</span>
            <span class="file-preview-output" id="outputBadge">—</span>
            <button type="button" class="remove-btn" id="removeBtn" title="O'chirish">✕</button>
        </div>

        {{-- Submit --}}
        <div class="submit-wrap">
            <button type="submit" class="submit-btn" id="submitBtn" disabled>
                <div class="spinner" id="spinner"></div>
                <span id="submitText">Konvertatsiya qilish</span>
            </button>
        </div>
    </form>

    <div class="info-box">
        <strong>ℹ️ Eslatma:</strong>
        <ul>
            <li>Konvertatsiya <strong>LibreOffice</strong> yordamida amalga oshiriladi — yuqori sifat kafolatlanadi.</li>
            <li>PDF → DOCX da jadvallar, tasvirlar va formatlash saqlanadi.</li>
            <li>Fayl serverda saqlanmaydi — yuklab olganingizdan so'ng o'chiriladi.</li>
        </ul>
    </div>

</div>

<script>
(function () {
    const dropZone   = document.getElementById('dropZone');
    const fileInput  = document.getElementById('fileInput');
    const filePreview= document.getElementById('filePreview');
    const fileIcon   = document.getElementById('fileIcon');
    const fileName   = document.getElementById('fileName');
    const fileMeta   = document.getElementById('fileMeta');
    const outputBadge= document.getElementById('outputBadge');
    const removeBtn  = document.getElementById('removeBtn');
    const submitBtn  = document.getElementById('submitBtn');
    const submitText = document.getElementById('submitText');
    const spinner    = document.getElementById('spinner');
    const form       = document.getElementById('convertForm');

    const MAX_SIZE   = 20 * 1024 * 1024; // 20 MB

    const conversionMap = { pdf: 'docx', docx: 'pdf', doc: 'pdf' };

    const icons  = { pdf: '📕', docx: '📘', doc: '📗' };
    const colors = {
        pdf:  { icon: 'icon-pdf',  badge: 'output-pdf' },
        docx: { icon: 'icon-docx', badge: 'output-docx' },
        doc:  { icon: 'icon-doc',  badge: 'output-docx' },
    };

    // ── Drag & Drop ──────────────────────────────────────────────────────────
    dropZone.addEventListener('dragover', e => {
        e.preventDefault();
        dropZone.classList.add('drag-over');
    });

    ['dragleave', 'dragend'].forEach(ev =>
        dropZone.addEventListener(ev, () => dropZone.classList.remove('drag-over'))
    );

    dropZone.addEventListener('drop', e => {
        e.preventDefault();
        dropZone.classList.remove('drag-over');
        if (e.dataTransfer.files.length) {
            applyFile(e.dataTransfer.files[0]);
        }
    });

    // ── File input change ────────────────────────────────────────────────────
    fileInput.addEventListener('change', e => {
        if (e.target.files.length) applyFile(e.target.files[0]);
    });

    // ── Remove file ──────────────────────────────────────────────────────────
    removeBtn.addEventListener('click', () => {
        fileInput.value = '';
        filePreview.classList.remove('visible');
        submitBtn.disabled = true;
    });

    // ── Form submit ──────────────────────────────────────────────────────────
    form.addEventListener('submit', () => {
        submitBtn.disabled = true;
        submitText.textContent = 'Konvertatsiya qilinmoqda…';
        spinner.style.display = 'block';
    });

    // ── Helper ───────────────────────────────────────────────────────────────
    function applyFile(file) {
        const ext = file.name.split('.').pop().toLowerCase();

        if (!conversionMap[ext]) {
            alert('Faqat PDF, DOC yoki DOCX fayllar qabul qilinadi.');
            return;
        }
        if (file.size > MAX_SIZE) {
            alert('Fayl hajmi 20 MB dan oshmasligi kerak.');
            return;
        }

        // Sync to input element (for drag-and-drop case)
        const dt = new DataTransfer();
        dt.items.add(file);
        fileInput.files = dt.files;

        const outputExt = conversionMap[ext];

        // Update icon
        const iconClass = colors[ext]?.icon || 'icon-pdf';
        fileIcon.className = 'file-preview-icon ' + iconClass;
        fileIcon.textContent = icons[ext] || '📄';

        // Update info
        fileName.textContent = file.name;
        fileMeta.textContent = formatBytes(file.size) + ' · ' + ext.toUpperCase();

        // Update output badge
        const badgeClass = colors[outputExt]?.badge || 'output-pdf';
        outputBadge.className = 'file-preview-output ' + badgeClass;
        outputBadge.textContent = outputExt.toUpperCase();

        filePreview.classList.add('visible');
        submitBtn.disabled = false;
    }

    function formatBytes(bytes) {
        if (bytes < 1024)        return bytes + ' B';
        if (bytes < 1024 * 1024) return (bytes / 1024).toFixed(1) + ' KB';
        return (bytes / (1024 * 1024)).toFixed(2) + ' MB';
    }
})();
</script>

</body>
</html>