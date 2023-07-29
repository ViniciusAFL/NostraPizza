@extends('layouts.base')

@section('conteudo')

<form action="{{ route('cliente.update', ['id'=>$cliente->id_cliente]) }}" method="post">


    @csrf

    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome"


    value="{{
        $cliente && $cliente->nome !='' ?
        $cliente->nome:old(nome)
        }}">


<input type="tel" name="celular" id="celular"


value="{{
    $cliente && $cliente->celular !='' ?
    $cliente->celular:old(celular)
    }}">


<input type="text" name="ddd" id="ddd"


value="{{
    $cliente && $cliente->ddd !='' ?
    $cliente->ddd:old(ddd)
    }}">

<input type="email" name="email" id="email"


value="{{
    $cliente && $cliente->email !='' ?
    $cliente->email:old(email)
    }}">


 <input type="submit" value="Atualizar">

    </form>

@endsection
