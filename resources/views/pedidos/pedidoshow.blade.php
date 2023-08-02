@extends('layouts.base')



@section('conteudo')
@include('layouts.menu')
<link rel="stylesheet" href="{{ asset('nostra.css') }}">

<div class="container">
    <h1>Pedido:</h1>
    <table class="table">
            <thead>
                <tr>

                    <th>ID_PEDIDO</th>
                    <th>ID_TIPO_PEDIDO</th>
                    <th>ID_USER</th>
                    <th>ID_CLIENTE</th>
                    <th>ID_CLIENTE_ENDERECO</th>
                    <th>ID_STATUS</th>
                    <th>ID_TIPO_PAGAMENTO</th>
                    <th>TOTAL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $pedidos->id_pedido }}</td>
                    <td>{{ $pedidos->id_tipo_pedido }}</td>
                    <td>{{ $pedidos->id_user }}</td>
                    <td>{{ $pedidos->id_cliente }}</td>
                    <td>{{ $pedidos->id_cliente_endereco }}</td>
                    <td>{{ $pedidos->id_status }}</td>
                    <td>{{ $pedidos->id_tipo_pagamento }}</td>
                    <td>{{ $pedidos->total }}</td>
                </tr>
            </tbody>
    </table>




</div>

@endsection
