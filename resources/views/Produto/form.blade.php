@extends('layouts.base')
@section('conteudo')
<h1>Editar Produto</h1>

<form action="{{ route('produto.update', ['id'=>$produto->id_produto]) }}" method="post">

{{-- precisa disso pro laravel ler --}}
@csrf

<label for="produto">Produto</label>
<input type="text" name="nome" id="nome"

{{-- TERNÁRIO (IF em uma linha só) --}}
value="{{

    //campos que n tem o $ é pq são campos nas tabelas do banco
    $produto && $produto->nome !='' ?
    $produto->nome:old(nome)
    }}">

    <input type="submit" value="Atualizar">



</form>
@endsection
@section('scripts')
@endsection
