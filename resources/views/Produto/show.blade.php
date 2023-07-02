@extends('layouts.base')
@section('conteudo')

<h1>Produto: {{$produto->id_produto}}</h1>
<h2>Relação de Usuários com esse Produto</h2>
<div class="container">

                <h2>{{$produto->nome}}</h2>
            </div>
@endsection
@section('scripts')
@endsection
