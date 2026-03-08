<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function upload(Request $request)
{
    $request->validate([
        'file' => 'required|mimes:docx|max:5120',
    ]);

    $file = $request->file('file');
    $filename = $file->store('uploads', 'public');

    // Redirect to OnlyOffice editor
    return redirect()->route('editDoc', ['filename' => $filename]);
}

 public function editDoc($filename)
{
    $fileUrl = asset('storage/' . $filename); // Public URL

    $onlyofficeConfig = [
        'document' => [
            'title' => $filename,
            'url' => $fileUrl,
            'fileType' => 'docx',
            'key' => uniqid(),
        ],
        'documentType' => 'word',
        'editorConfig' => [
            'callbackUrl' => route('saveEditedDoc', ['filename' => $filename]),
            'user' => [
                'id' => 1,
                'name' => 'User'
            ]
        ]
    ];

    return view('onlyoffice_editor', compact('onlyofficeConfig'));
}

}
