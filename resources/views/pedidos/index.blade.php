@extends('layouts.base')
@section('conteudo')
    @include('layouts.menu')
    <link rel="stylesheet" href="{{ asset('nostra.css') }}">

    <div class="container cont-pedidos">
        <div class="container cont-pedidos-2">
            <h1 class="p-3 text-center" style="color:#d1d1d1">Pedidos</h1>
            <table class="table m-auto" style="width:250px">
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
                                <a class="btn btn-clientes text-center" style="width: 70px"
                                    href="{{ route('pedido.show', ['id_pedido' => $pedido->id_pedido]) }}">Ver</a>
                                <a class="btn btn-clientes mt-1" style="width: 70px"
                                    href="{{ route('pedido.edit', ['id_pedido' => $pedido->id_pedido]) }}">Editar</a>
                                <form class="text-center" action="{{ route('pedido.destroy', ['id_pedido' => $pedido->id_pedido]) }}"
                                    method="post">
                                    @csrf
                                    @method('delete')
                                    <button onclick=" return confirm('tem certeza que deseja excluir?')"
                                    class="btn btn-clientes mt-1" type="submit" style="width: 70px"
                                        href="{{ route('pedido.destroy', ['id_pedido' => $pedido->id_pedido]) }}">Excluir</button>
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
    </div>
@endsection
