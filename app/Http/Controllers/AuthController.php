<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate(
            [
            'email' => ['required', 'email'],
            'password' => ['required'],
            ],
            [
            'required' => MSG_ERRO_REQUIRED,
            'email.email' => MSG_ERRO_VALIDATE_EMAIL,
            ]
        );

        $msgErrorAuth = MSG_ERRO_AUTH;

        if (Auth::attempt($credentials)) {
            if (!Auth::user()->active) {
                Auth::logout();
                $msgErrorAuth = MSG_ERRO_AUTORIZATION;
            } else {
                $request->session()->regenerate();
                return redirect()->intended('/');
            }
        }

        return back()->withErrors([
            'login' => $msgErrorAuth,
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('index');
    }
}
