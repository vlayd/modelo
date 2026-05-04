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
        <x-table.table-db>
            <x-slot:thead>
                <x-table.th :ths="['Nome', 'Email', 'Ações']"/>
            </x-slot:thead>
            <x-slot:tbody>
                @foreach ($usuarios as $usuario)
                    <x-table.td
                        :tds="[
                            [
                                ['item' => $usuario['name'], 'class' => 'text-center'],
                            ],
                            [
                                ['item' => $usuario['email'], 'class' => 'text-center']
                            ],
                            [
                                ['type' => 'show', 'disabled' => 'true', 'class' => 'text-center pb-0'],
                                ['type' => 'edit', 'route' => 'usuario.edit', 'argRoute' => encrypt($usuario['id'])],
                                ['type' => $active[$usuario['active']], 'route' => 'usuario.change_status', 'argRoute' => [encrypt($usuario['id']), $status[$usuario['active']]]],
                            ]
                        ]"
                    />
                @endforeach
            </x-slot:tbody>
        </x-table.table-db>
    </x-table.lista>
</x-layouts.base>


