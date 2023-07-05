@extends('layouts.base')
@section('conteudo')

<h1>Promoção</h1>
{{-- <h2>Fique a vontade {{$user->nome}}</h2> --}}
<div class="container">

                <h2>{{$promocao->nome}}</h2>
                <h2>{{$promocao->preco_promo}}</h2>
                <p>{{$promocao->descricao}}</p>
                <img src="{{$promocao->foto}}" alt="">
            </div>
@endsection
@section('scripts')
@endsection
