@extends('layouts.base')
@section('conteudo')

<h1>Produto</h1>
{{-- <h2>Fique a vontade {{$user->nome}}</h2> --}}
<div class="container">
                <h1>{{$produto->id_produto}}</h1>
                <h2>{{$produto->nome}}</h2>
                <p>{{$produto->descricao}}</p>
                <img src="{{$produto->foto}}" alt="">
            </div>
@endsection
@section('scripts')
@endsection
