<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/', function () {
    return view('home');
});


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.index');
    });
});
Route::middleware(['auth', 'role:manager'])->group(function () {
    Route::get('/manager', function () {
        return view('admin.manager');
    });
});


Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});


Route::get('testdoc',function(){
    return view('document_template.shaxsiy_doc.aybdor_xodimga_jazo_qullash_bildirgi');
});

Route::get('form',function(){
    return view('form_data');
});

Route::get('aaa',function(){
    return view('index');
});


