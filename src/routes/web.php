<?php

use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/admin', function () {
    return view('admin'); // bu admin.blade.php ni chaqiradi
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

Route::get('/ariza', function () {
    return view('document_templates.ariza');
})->name('ariza');

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');

Route::resource('documents', DocumentController::class)->names('documents');
