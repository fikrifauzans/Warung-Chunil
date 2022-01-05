<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function show()
    {
        if (Auth::check()) {
            return redirect('/product');
        }

        return view('user.login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required', 'email',
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('product');
        }
        return back()->withErrors('masukan kembali email dan password');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');

    }
}
