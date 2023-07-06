@extends('layouts.base')
@section('conteudo')
<h1>Editar tamanho: {{$tamanhos->id_produto_tamanho}}</h1>



<form action="{{ route('tamanho.update', ['id'=>$tamanhos->id_produto_tamanho]) }}" method="post">

{{-- precisa disso pro laravel ler --}}
@csrf

<div class="row">

    <div class="col-md-2">
        <label for="ID_PRODUTO">ID_TAMANHO</label>
        <input type="text" name="id_tamanho" id="id_tamanho"
        value="{{
            $tamanhos && $tamanhos !='' ?
            $tamanhos->id_tamanho:old(id_tamanho)
        }}">
    </div>

    <div class="col-md-2">
        <label for="ID_PRODUTO">ID_PRODUTO</label>
        <input type="text" name="id_produto" id="id_produto"
        value="{{
            $tamanhos && $tamanhos !='' ?
            $tamanhos->id_produto:old(id_produto)
        }}">
    </div>

    <div class="col-md-2">
        <label for="PRECO PROMOCAO">PREÇO PROMOCAO</label>
        <input type="text" name="preco_promocao" id="preco_promocao"
        value="{{
            $tamanhos && $tamanhos !='' ?
            $tamanhos->preco_promocao:old(preco_promocao)
        }}">
    </div>

    <div class="col-md-2">
        <label for="PRECO PROMOCAO">PREÇO</label>
        <input type="text" name="preco" id="preco"
        value="{{
            $tamanhos && $tamanhos !='' ?
            $tamanhos->preco:old(preco)
        }}">
    </div>

    <div class="col-md-2">
        <label for="OBSERVACOES">OBSERVACOES</label>
        <input type="text" name="observacoes" id="observacoes"
        value="{{
            $tamanhos && $tamanhos !='' ?
            $tamanhos->observacoes:old(observacoes)
        }}">
    </div>
</div>

<input type="submit" value="Atualizar">



</form>
@endsection
@section('scripts')
@endsection
