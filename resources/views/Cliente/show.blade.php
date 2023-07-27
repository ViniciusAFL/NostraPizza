
@extends('layouts.base')

@section('conteudo')

@include('layouts.menu')

<link rel="stylesheet" href="{{ asset('nostra.css') }}">

<div class="container indexcli" style="color: #FFF">
<h1>Detalhes do Cliente</h1>

    <p>Nome: {{ $cliente->nome }}</p>
    <p>Email: {{ $cliente->email }}</p>
    <p>Telefone: {{$cliente->celular}}</p>
    <p>DDD: {{$cliente->ddd}}</p>

    <h2>Endereço</h2>


   @foreach ($clientesEndereco as $cliend  )
        <input type="hidden" name="id_endereco">
        <input type="hidden" name="id_cliente">
   @endforeach

   @foreach ($enderecos as  $endereco)
    <input type="hidden" name="id_endereco">
   @endforeach

           @if ($cliend->endereco->id_endereco <> $endereco->id_endereco || $cliend->cliente->id_cliente <> $cliente->id_cliente)
                <p>Cliente não possui um endereço.</p>

                @else
                <p>Rua: {{$cliend->endereco->endereco}} </p>
                <p>Bairro: {{$cliend->endereco->bairro}}</p>
                <p>Cep: {{$cliend->endereco->cep}}</p>
                <p>Complemento: {{$cliend->endereco->complemento}}</p>
                <p>Número: {{$cliend->endereco->numero}} </p>
                <p>Cidade: {{$cliend->endereco->cidade}} </p>
                <p>Estado:{{$cliend->endereco->uf}}  </p>
           @endif

</div>


@endsection
