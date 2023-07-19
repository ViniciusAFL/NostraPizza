@extends('layouts.base')

@section('conteudo')



<h1>TESTE</h1>


<p> olá faça o seu cadastro {{auth()->user()->nome}}</p>
<p> {{ (auth()->user()->email) }}</p>

{{-- <p>{{$cliente->nome}}</p> --}}

@foreach ($clientes as $cliente)

<input type="hidden" name="cliente">

@endforeach

@php
    $user = App\Models\User::where('email', $cliente->email)->first();
@endphp

@if (auth()->user()->email != $cliente->email)
    <a href="{{ route('cliente.create') }}">Cadastrar</a>
@endif


@if ($cliente->email == auth()->user()->email)
    <p>Já existe um cadastro</p>
    <a href="{{ route('cliente.edit', ['id'=>$cliente->id_cliente]) }}">Editar</a>
@endif







</div>
@endsection
