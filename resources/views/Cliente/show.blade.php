
@extends('layouts.base')

@section('conteudo')

@include('layouts.menu')

<link rel="stylesheet" href="{{ asset('nostra.css') }}">

<div class="container indexcli" style="color: #FFF">
    <h1>Detalhes do Cliente E Cadastrar Pedido</h1>

    <h2>Cadastrar Um Endereço:</h2>
        <a class="btn btn-warning mb-2" href="{{ route('createEndereco', ['id_cliente' => $cliente->id_cliente]) }}">Cadastrar Endereço</a>


    <p>Nome: {{ $cliente->nome }}</p>
    <p>Email: {{ $cliente->email }}</p>
    <p>Telefone: {{$cliente->celular}}</p>
    <p>DDD: {{$cliente->ddd}}</p>


        @foreach ($enderecos as $endereco)
            <input type="hidden" name="id_endereco">
        @endforeach

        <p>Endereços do cliente:</p>

        @foreach ($clientesEndereco as $cliend )

        @if ($cliente->id_cliente == $cliend->cliente->id_cliente && $cliend->cliente->deleted_at == null)

            <table class="table">
                <thead>
                    <tr>
                        <th>Ações</th>
                        <th>ID_ENDEREÇO</th>
                        <th>ENDEREÇO</th>
                        <th>NUMERO</th>
                        <th>BAIRRO</th>
                        <th>CIDADE</th>
                        <th>CEP</th>
                        <th>UF</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>
                                <a class="btn btn-success" href="{{ route('editEndereco',
                                ['id_cliente' => $cliend->cliente->id_cliente,
                                'id_endereco' => $cliend->endereco->id_endereco] ) }}">
                                Editar</a>

                                <form action="{{ route('destroyCliend',
                                ['id_cliente' => $cliend->cliente->id_cliente,
                                'id_endereco' => $cliend->endereco->id_endereco] ) }}" method="POST">
                                    @csrf
                                    @method('Delete')
                                    <button class="btn btn-danger"
                                        href="{{ route('destroyCliend',
                                        ['id_cliente' => $cliend->cliente->id_cliente,
                                        'id_endereco' => $cliend->endereco->id_endereco] ) }}">Excluir</button>
                                </form>

                                <a class="btn btn-primary" href="{{ route('pedido.create',
                                ['id_cliente' =>$cliente->id_cliente,
                                'id_cliente_endereco' =>$cliend->id_cliente_endereco]) }}">Criar pedido</a>


                            </td>

                            <td>{{$cliend->endereco->id_endereco}}</td>
                            <td>{{$cliend->endereco->endereco}}</td>
                            <td>{{$cliend->endereco->numero}}</td>
                            <td>{{$cliend->endereco->bairro}}</td>
                            <td>{{$cliend->endereco->cidade}}</td>
                            <td>{{$cliend->endereco->cep}}</td>
                            <td>{{$cliend->endereco->uf}}</td>

                        </tr>
                </tbody>

                @endif

                @endforeach
        </table>


    </div>






@endsection
