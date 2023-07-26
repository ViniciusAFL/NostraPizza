
@extends('layouts.base')

@section('conteudo')

@include('ProdutoCliente.partials.menu')


<h1>Detalhes do Cliente</h1>

    <p>Nome: {{ $cliente->nome }}</p>
    <p>Email: {{ $cliente->email }}</p>
    <p>Telefone: {{$cliente->celular}}</p>
    <p>DDD: {{$cliente->ddd}}</p>
    <!-- Outros campos do cliente... -->

    <h2>Endereço</h2>

   @foreach ($clientesEndereco as $cliend  )
        <input type="hidden" name="id_endereco">
        <input type="hidden" name="id_cliente">
   @endforeach

   @foreach ($enderecos as  $endereco)
    <input type="hidden" name="id_endereco">
   @endforeach


    <p>Rua: {{$cliend->endereco->id_endereco}} </p>
    <p>Número: {{$cliend->endereco->numero}} </p>
    <p>Cidade: {{$cliend->endereco->cidade}} </p>
    <p>Estado:{{$cliend->endereco->uf}}  </p> -



@endsection
