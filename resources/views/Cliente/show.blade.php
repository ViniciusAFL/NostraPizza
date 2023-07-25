
@extends('layouts.base')

@section('conteudo')

@include('ProdutoCliente.partials.menu')

<h1>Olá {{$cliente->nome}}</h1>

<p>Informações cadastradas:

{{$cliente->nome}},
{{$cliente->email}},
{{$cliente->celular}},
{{$cliente->ddd}},

</p>



{{-- @php
        $clientesEndereco = App\Models\ClienteEndereco::find(['id_cliente' => $cliente->id_cliente])->first();
        $endereco = App\Models\ClienteEndereco::class;
        $end = App\Models\Endereco::class;


@endphp --}}




@endsection
