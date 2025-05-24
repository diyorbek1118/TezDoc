<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/admin', function () {
    return view('admin'); 
});


Route::get('/', function () {
    return view('app.index');
})->name('home');

Route::get('/about', function () {
    return view('app.about');
})->name('about');

Route::get('/doctype', function () {
    return view('app.doctype');
})->name('doctype');
Route::get('/contact', function () {
    return view('app.contact');
})->name('contact');

Route::get('/ariza', [DocumentController::class, 'ariza'])->name('ariza');
Route::get('/arizax', function(){
    return view('document_templates.ariza');
});

Route::get('ariza/pdf', [PdfController::class, 'generate'])->name('ariza.pdf');

Route::get('/admin', [PdfController::class, 'ariza'])->name('ariza.pdf');

Route::resource('documents', DocumentController::class)->names('documents');
