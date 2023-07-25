@extends('layouts.base')

@section('conteudo')

<div class="row">
    <div class="div">
        Olá <p> olá {{auth()->user()->nome}}</p>

        <h2>Suas informações</h2>
        {{$cliente->celular}}
        {{$cliente->email}}
        {{$cliente->ddd}}

        {{$endereco->bairro}}
        {{$endereco->cidade}}
        {{$endereco->complemento}}
        {{$endereco->endereco}}
        {{$endereco->uf}}
        {{$endereco->numero}}
    </div>
</div>

@endsection
