<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Documents\DocumentController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\TemplateController;

Route::get('/', function () {
    return view('/home.home');
})->name('home');


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.index');
    });
});
Route::middleware(['auth'])->group(function () {
    Route::get('/manager', function () {
        return view('admin.manager');
    });
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::post('file-upload',[FileUploadController::class,'upload'])->name('file.upload');
Route::get('file-upload/file-edit', [FileUploadController::class,'convertToHtml'])->name('file-edit');
Route::get('/edit/{filename}', [FileUploadController::class, 'editDoc'])->name('editDoc');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});


Route::get('/templates', [TemplateController::class, 'index'])->name('templates.index');
Route::get('/documents', [DocumentController::class, 'index'])->name('documents.index');
Route::get('testdoc',function(){
    return view('document_template.shaxsiy_doc.aybdor_xodimga_jazo_qullash_bildirgi');
});
Route::get('shartnoma',function(){
    return view('document_template.shartnoma_doc.haqdan_voz_kechish_qarzni_utqazish');
});
Route::get('ariza',function(){
    return view('document_template.ariza_doc.doimiy_yashash_manzil_iltimosnoma');
});
Route::get('/form/{id}', [DocumentController::class, 'document_fields'])->name('form.show');



Route::get('show', [DocumentController::class,'index'])->name('show');

Route::get('file-upload',function(){
    return view('home.file_upload');
})->name('file.upload');


Route::get('test',function(){
    return view('test');
});


