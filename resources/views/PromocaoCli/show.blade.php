@extends('layouts.base')
@section('conteudo')

<h1>Promoção</h1>
{{-- <h2>Fique a vontade {{$user->nome}}</h2> --}}
<div class="container">

                <h2>{{$promocao->id_produto_tamanho}}</h2>
                <h2>{{$promocao->preco_promocao}}</h2>
                <p>{{$promocao->observacoes}}</p>
                {{-- <img src="{{$promocao->foto}}" alt=""> --}}
            </div>
@endsection
@section('scripts')
@endsection
