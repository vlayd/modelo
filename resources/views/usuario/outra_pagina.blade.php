<?php
    $title = 'Página Inicial';
    $breadcrumb = [
        BREADCRUMB[1],
    ];
    $page = PAGE[1];
    session()->flash('message', 'Updated!');

?>
<x-layouts.base
    :$title
    :$breadcrumb
    :$page>
    <x-table.lista
        title="Lista de Usuários"
        textButton="Adicionar Usuário"
        urlButton="usuario.create"
        description="Aqui estão listados todos os usuários cadastrados no sistema."
    >
        <x-table.table-db
            :ths="['Nome', 'Email']"
            :tds="['name', 'email']"
            :lista="$usuarios"
            :actions="
            [
                ['type' => 'show', 'disabled' => true],
                ['type' => 'edit', 'route' => 'usuario.edit'],
                ['type' => 'delete'],
                ['type' => 'unblock', 'td' => 'active', 'value' => '0'],
                ['type' => 'block', 'td' => 'active', 'value' => '1'],
            ]"
        />
    </x-table.lista>
</x-layouts.base>
