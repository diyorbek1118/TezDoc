<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    // Login form ko'rsatish
    public function showLoginForm()
    {
        return view('auth.login_register'); // Sizning Blade faylingiz
    }

    // Login
   public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => ['required','email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials, $request->filled('remember'))) {
        $request->session()->regenerate();
        Session::flash('success', 'Kirish muvaffaqiyatli amalga oshdi!');
        return redirect()->intended('/');
    }

    Session::flash('error', 'Kirish amalga oshmadi!');
    
    return back()
        ->withInput($request->only('email'));
}



    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        Session::flash('success', 'Siz tizimdan chiqdingiz.');
        return redirect()->route('login');


    }
}
