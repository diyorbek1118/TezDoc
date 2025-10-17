<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    // Register form ko'rsatish
    public function showRegistrationForm()
    {
        return view('auth.login_register'); // Sizning Blade faylingiz
    }

    // Register
    public function register(Request $request)
    {
        // Validation va xatoliklarni flash orqali chiqarish
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            Auth::login($user);

            // Muvaffaqiyatli ro‘yxatdan o‘tganini flash bilan xabar berish
            Session::flash('success', 'Ro‘yxatdan o‘tish muvaffaqiyatli amalga oshdi!');
            return redirect('/');

        } catch (\Exception $e) {
            // Har qanday exception xatolarini flash bilan chiqarish
            Session::flash('error', 'Ro‘yxatdan o‘tishda xatolik: ' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }
}
