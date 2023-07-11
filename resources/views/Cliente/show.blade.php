
@extends('layouts.base')

@section('conteudo')

<h1>Olá {{$cliente->nome}}</h1>

<div class="row">
        <h2>Informações cadastradas:</h2>
    <div>
        {{$cliente->celular}}
    </div>
    <div>
        {{$cliente->ddd}}

    </div>
    <div>
        {{$cliente->email}}
    </div>
</div>


<h2>
    Editar informações:
    <a href="{{ route('cliente.edit', ['id'=>$cliente->id_cliente]) }}">Editar cadastro</a>
</h2>

@endsection
