@extends('layouts.base')
@section('conteudo')
    @include('layouts.menu')
    <link rel="stylesheet" href="{{ asset('nostra.css') }}">

        <div class="container">
            <h1 style="color:#d1d1d1"> - Pedidos</h1>
            <table class="table">
                @foreach ($pedidos as $pedido)
                    <thead>
                        <tr>
                            <th>Ações</th>
                            <th>ID_PEDIDO</th>
                            <th>ID_TIPO_PEDIDO</th>
                            <th>ID_USER</th>
                            <th>ID_CLIENTE</th>
                            <th>ID_CLIENTE_ENDERECO</th>
                            <th>ID_STATUS</th>
                            <th>ID_TIPO_PAGAMENTO</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                                <a class="btn btn-success" href="{{ route('pedido.show', ['id_pedido'=>$pedido->id_pedido]) }}">ver</a>
                                <a class="btn btn-primary" href="{{ route('pedido.edit', ['id_pedido'=>$pedido->id_pedido]) }}">editar</a>
                                <form action="{{ route('pedido.destroy', ['id_pedido'=>$pedido->id_pedido]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                <button class="btn btn-warning" type="submit" href="{{ route('pedido.destroy', ['id_pedido'=>$pedido->id_pedido]) }}">Excluir</button>
                                </form>
                            </td>

                            <td>{{ $pedido->id_pedido }}</td>
                            <td>{{ $pedido->id_tipo_pedido }}</td>
                            <td>{{ $pedido->id_user }}</td>
                            <td>{{ $pedido->id_cliente }}</td>
                            <td>{{ $pedido->id_cliente_endereco }}</td>
                            <td>{{ $pedido->id_status }}</td>
                            <td>{{ $pedido->id_tipo_pagamento }}</td>
                        </tr>
                    </tbody>
                @endforeach
            </table>

        </div>
    @endsection
