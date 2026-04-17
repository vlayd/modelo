<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class UserController extends Controller
{
    public function index()
    {
        $page2 = 'usuariosIndex';
        return view('usuario.index', compact('page2'));
    }

    public function outraPagina()
    {
        $usuarios = User::get()->toArray();
        // dd($usuarios);
        return view('usuario.outra_pagina', compact('usuarios'));
    }

    public function create()
    {
        $page2 = 'usuariosCreate';
        return view('usuario.form_save', compact('page2'));
    }

    public function store(StorePostRequest $request)
    {
        exit;
        $page2 = 'usuariosCreate';
        return view('usuario.form_save', compact('page2'));
    }

    public function modalAjax()
    {
        $page2 = 'usuariosModalAjax';
        return view('usuario.modal_ajax', compact('page2'));
    }

    public function modalReload()
    {
        $page2 = 'usuariosModalReload';
        return view('usuario.modal_reload', compact('page2'));
    }
}
