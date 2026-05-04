<?php
    $active = ['unblock', 'block'];
    $status = ['1', '0'];
?>
<x-table.table-db>
    <x-slot:thead>
        <x-table.th :ths="['Nome', 'Email', 'Ações']"/>
    </x-slot:thead>
    <x-slot:tbody>
        @foreach ($usuarios as $usuario)
            <x-table.td
                :tds="
                [
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
    <?=CDN_JS_DATATABLES?>
    </x-slot:tbody>    
</x-table.table-db>

