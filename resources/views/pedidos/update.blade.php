@extends('layouts.base')

@section('conteudo')

@include('layouts.menu')

<link rel="stylesheet" href="{{ asset('nostra.css') }}">

<div class="container">
    <form action="{{ route('pedido.update', ['id_pedido'=>$pedidos->id_pedido]) }}" method="post">
        @csrf
        <label class="label-cliente-edit ms-2" for="id_tipo_pedido">id_tipo_pedido</label>
                <input class="input-create-user p-2 ms-2" type="text" name="id_tipo_pedido" id="id_tipo_pedido"
                    value="{{ $pedidos && $pedidos->id_tipo_pedido != '' ? $pedidos->id_tipo_pedido : old(id_tipo_pedido) }}">

                <label class="label-cliente-edit ms-2" for="id_status">id_status</label>
                <input class="input-create-user p-2" type="numb" name="id_status" id="id_status"
                    value="{{ $pedidos && $pedidos->id_status != '' ? $pedidos->id_status : old(id_status) }}">

                <label class="label-cliente-edit ms-2" for="id_tipo_pagamento">id_tipo_pagamento</label>
                <input class="input-create-user p-2" type="text" name="id_tipo_pagamento" id="id_tipo_pagamento"
                    value="{{ $pedidos && $pedidos->id_tipo_pagamento != '' ? $pedidos->id_tipo_pagamento : old(id_tipo_pagamento) }}">

                <label class="label-cliente-edit ms-2" for="total">total</label>
                <input class="input-create-user p-2" type="number" name="total" id="total"
                    value="{{ $pedidos && $pedidos->total != '' ? $pedidos->total : old(total) }}">

        <input type="submit" value="Atualizar">
    </form>
</div>


@endsection
