<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\User;
use Illuminate\Contracts\Encryption\DecryptException;


class UserController extends Controller
{
    public function index()
    {
        return view('usuario.index');
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
        $data = $request->validated();
        if($request['id']) User::where('id', decrypt($request['id']))->update($data);
        else User::create($data);
        return redirect()->route('usuario.outra_pagina')->with('success', 'Cadastro Salvo...!');
    }

    public function changeStatus(string $id, string $status)
    {
        $id = decrypt($id);
        User::where('id', $id)->update(['active' => $status]);
        return redirect()->route('usuario.outra_pagina');
    }

    public function edit(string $id)
    {
        try {
            // Desencripta o ID recebido
            $decryptedId = decrypt($id);

            // Busca o usuário normalmente
            $user = User::findOrFail($decryptedId);
            return view('usuario.form_save', compact('user', 'id'));
        } catch (DecryptException $e) {
            // Se a chave for inválida ou alterada, redireciona com erro
            return abort('404');
        }
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
