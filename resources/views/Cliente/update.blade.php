@extends('layouts.base')

@section('conteudo')

<form action="{{ route('cliente.update', ['id'=>$cliente->id_cliente]) }}" method="post">

    {{-- precisa disso pro laravel ler --}}
    @csrf

    <label for="produto">Produto</label>
    <input type="text" name="nome" id="nome"

    {{-- TERNÁRIO (IF em uma linha só) --}}
    value="{{
        $cliente && $cliente->nome !='' ?
        $cliente->nome:old(nome)
        }}">


<input type="tel" name="celular" id="celular"

{{-- TERNÁRIO (IF em uma linha só) --}}
value="{{
    $cliente && $cliente->celular !='' ?
    $cliente->celular:old(celular)
    }}">


<input type="text" name="ddd" id="ddd"

{{-- TERNÁRIO (IF em uma linha só) --}}
value="{{
    $cliente && $cliente->ddd !='' ?
    $cliente->ddd:old(ddd)
    }}">

<input type="email" name="email" id="email"

{{-- TERNÁRIO (IF em uma linha só) --}}
value="{{
    $cliente && $cliente->email !='' ?
    $cliente->email:old(email)
    }}">

        <input type="submit" value="Atualizar">



    </form>

@endsection
