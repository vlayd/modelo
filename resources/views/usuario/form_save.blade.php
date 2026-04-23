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
        <form action="{{ route('usuario.store') }}" method="POST" novalidate>
            @csrf
            <div class="row">
                <x-forms.input campo="name" label="Nome" value="{{old('name')??$user['name']??''}}" class="col-6" required='true'/>
                <x-forms.input campo="cpf" label="CPF" value="{{old('cpf')??$user['cpf']??''}}" classInput="cpf" class="col-6" required='true'/>
                <x-forms.input campo="email" type="email" label="Email" value="{{old('email')??$user['email']??''}}" class="col-6" required='true'/>
                <x-forms.input campo="birth" type="date" label="Nascimento" value="{{old('birth')??$user['birth']??''}}" class="col-6" required='true'/>
                @isset($user)
                <x-forms.input campo="id" type="hidden" value="{{$id}}"/>
                @endisset
            </div>
            <x-forms.button text="Salvar" type="submit" class="mt-4"/>
            <x-forms.button text="Cancelar" url="{{ BREADCRUMB[1][1] }}" class="mt-4"/>
        </form>
    </x-cards.card>

    <x-slot:scripts>

        <?=CDN_JS_MASK?>
    </x-slot:scripts>

</x-layouts.base>
