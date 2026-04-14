<?php
    $title = 'Página Inicial';
    $breadcrumb = [
        BREADCRUMB[1],
    ];
    $page = PAGE[1];

?>
<x-layouts.base
    :$title
    :$breadcrumb
    :$page>
    <x-table.lista
        title="Lista de Usuários"
        textButton="Adicionar Usuário"
    >
        <x-table.table-db
            :ths="['Nome', 'Email']"
            :tds="['name', 'email']"
            :lista="$usuarios"
            :actions="
            [
                ['type' => 'show', 'disabled' => true],
                ['type' => 'edit'],
                ['type' => 'delete'],
                ['type' => 'unblock', 'td' => 'active', 'value' => '0'],
                ['type' => 'block', 'td' => 'active', 'value' => '1'],
            ]"
        />
    </x-table.lista>
</x-layouts.base>
