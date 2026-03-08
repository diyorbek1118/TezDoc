<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    // UPLOAD
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:docx|max:5120',
        ]);

        $file = $request->file('file');

        $file->storeAs(
            'public/uploads',
            'file1132564251.docx'
        );

        return redirect('/download');
    }

    // DOWNLOAD
    public function download()
    {
        $filePath = storage_path('app/public/uploads/file1132564251.docx');

        if (!file_exists($filePath)) {
            abort(404, 'File topilmadi');
        }

        return response()->download(
            $filePath,
            'file1132564251.docx',
            [
                'Content-Type' =>
                    'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
            ]
        );
    }
}
