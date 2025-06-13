<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

        Route::get('/', function () {
        return view('app.index');
    })->name('home');

    Route::middleware('auth')->group(function () {

    Route::get('/about', function () {
        return view('app.about');
    })->name('about');

    Route::get('/doctype', function () {
        return view('app.doctype');
    })->name('doctype');
    Route::get('/contact', function () {
        return view('app.contact');
    })->name('contact');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/admin', function () {
    return view('admin.index'); 
});



Route::get('/ariza', [DocumentController::class, 'ariza'])->name('ariza');
Route::get('/arizax', function(){
    return view('document_templates.ariza');
});

Route::get('ariza/pdf', [PdfController::class, 'generate'])->name('ariza.pdf');

// Route::get('/admin', [PdfController::class, 'ariza'])->name('ariza.pdf');

Route::resource('documents', DocumentController::class)->names('documents');
