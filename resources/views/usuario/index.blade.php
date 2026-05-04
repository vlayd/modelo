<?php
    $title = 'Página Inicial';
    $breadcrumb = [
        BREADCRUMB[1],
    ];
    $page = PAGE[2];
    $active = ['unblock', 'block'];
    $status = ['1', '0'];
?>
<x-layouts.base :$title :$breadcrumb :$page>
    <x-table.lista
        title="Lista de Usuários"
        textButton="Adicionar Usuário"
        urlButton="usuario.create"
        description="Aqui estão listados todos os usuários cadastrados no sistema.">
    </x-table.lista>
    <x-components.modal>
    </x-components.modal>
</x-layouts.base>


