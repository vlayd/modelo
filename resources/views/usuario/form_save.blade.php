<?php
    $title = 'Página Inicial';
    $breadcrumb = [
        BREADCRUMB[0],
    ];
    $page = PAGE[0]
?>
<x-layouts.base
    :$title
    :$breadcrumb
    :$page>
    <x-cards.card>
        <x-slot:header>
            <h5>Formulários</h5>
            <p>Cadastrando os usuários</p>
        </x-slot:header>
        <div class="row">
            
        </div>
        <form action="{{ route('usuario.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
    </x-cards.card>
</x-layouts.base>
