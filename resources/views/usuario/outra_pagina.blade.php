<?php
    $title = 'Página Inicial';
    $breadcrumb = [
        BREADCRUMB[1],
    ];
    $page = PAGE[1];
    session()->flash('message', 'Updated!');
    $active = ['unblock', 'block'];
    $status = ['1', '0'];
?>
<x-layouts.base
    :$title
    :$breadcrumb
    :$page>
    <x-table.lista
        title="Lista de Usuários"
        textButton="Adicionar Usuário"
        urlButton="usuario.create"
        description="Aqui estão listados todos os usuários cadastrados no sistema.">
            <x-slot:thead>
                <x-table.th :ths="['Nome', 'Email', 'Ações']"/>
            </x-slot:thead>
            <x-slot:tbody>
                @foreach ($usuarios as $usuario)
                    <x-table.td
                        :tds="[
                            $usuario['name'], $usuario['email'],
                            [
                                ['type' => 'show', 'disabled' => 'true'],
                                ['type' => 'edit', 'route' => 'usuario.edit', 'argRoute' => encrypt($usuario['id'])],
                                ['type' => $active[$usuario['active']], 'route' => 'usuario.change_status', 'argRoute' => [encrypt($usuario['id']), $status[$usuario['active']]]],
                            ]
                        ]"
                    />
                @endforeach
            </x-slot:tbody>
    </x-table.lista>
</x-layouts.base>


