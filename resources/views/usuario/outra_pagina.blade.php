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
        description="Aqui estão listados todos os usuários cadastrados no sistema.">
            <x-slot:thead>
                <x-table.thead :ths="['Nome', 'Email', 'Ações']"/>
            </x-slot:thead>
            <x-slot:tbody>
                @foreach ($usuarios as $usuario)
                    <x-table.tbody :tds="[$usuario['name'], $usuario['email']]">
                        <x-slot:actions>
                            <x-icons.icon-action type="show" disabled="true"/>
                        </x-slot:actions>
                    </x-table.tbody>
                @endforeach
            </x-slot:tbody>
    </x-table.lista>
</x-layouts.base>


