@extends('layouts.base')
@section('content')
@include('layouts.menuAdm')

<link rel="stylesheet" href="{{ asset('nostra.css') }}">

<div class="col-12 bg-create-user">
<form method="post" action="{{ route('user.store') }}">
    @csrf
    <input class="input-create-user ms-3 mt-3" type="text" name="nome" id="nome" placeholder="Nome" required>
    <input class="input-create-user ms-3" type="email" name="email" id="email" placeholder="E-mail" required>
    <input class="input-create-user ms-3" type="password" name="password" id="password" placeholder="Senha" required>
    <input class="input-create-user ms-3" type="number" min='1' max="3" name="id_cargo" id="id_cargo" placeholder="Cargo" required>
    <p class="ms-3 color-cargos mt-3">Atenção, Existem três tipos de cargos:

    </p>
    <p class="ms-3 color-cargos">1 - Cliente</p>
    <p class="ms-3 color-cargos">2 - Gerente</p>
    <p class="ms-3 color-cargos">3 - Funcionário</p>
    <button class="ms-3 btn-create-user" type="submit">Cadastrar</button>
</form>
@include('layouts.rodape')
</div>



@endsection
@section('scripts')

@endsection
