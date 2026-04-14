<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Vite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
        // dd(Auth::user()->active);
        if (Auth::check()) {
            return view('home.index');
        }
        return view('login/index');
    }
}
