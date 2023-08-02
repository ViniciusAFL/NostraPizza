@extends('layouts.base')

@section('conteudo')

<h1>Cadastrar pedido</h1>

 {{-- @dd(Auth()->user()->id) --}}

<form action="{{ route('pedido.store') }}" method="post">
    @csrf
    <input type="hidden" name="id_cliente" value="{{$cliente = ($_GET['id_cliente'])}}">
    <input type="hidden" name="id_cliente_endereco" value="{{$id_cliente_endereco = ($_GET['id_cliente_endereco'])}}">
    <input type="hidden" name="id_user" value="{{$id_user = auth()->user()->id}}">

    <select class="form-select" name="id_tipo_pedido" id="id_tipo_pedido" required>
        <label class="form-label" for="id_tipo_pedido">
            Tipo Pedido
        </label>
        <option>Selecione</option>
        @foreach ($tipo_pedido as $tipo_ped)
            <option value="{{ $tipo_ped->id_tipo_pedido }}" @selected($tipo_ped && $tipo_ped->id_tipo_pedido == $tipo_ped->id_tipo_pedido ? true : false)>
                {{ $tipo_ped->tipo_pedido }}
            </option>
        @endforeach
    </select>

    <select class="form-select" name="id_status" id="id_status" required>
        <label class="form-label" for="id_status">
            Tipo Pedido
        </label>
        <option>Selecione</option>
        @foreach ($status as $status)
            <option value="{{ $status->id_status }}" @selected($status && $status->id_status == $status->id_status ? true : false)>
                {{ $status->status }}
            </option>
        @endforeach
    </select>

    <select class="form-select" name="id_tipo_pagamento" id="id_tipo_pagamento" required>
        <label class="form-label" for="id_tipo_pagamento">
            Tipo Pedido
        </label>
        <option>Selecione</option>
        @foreach ($tipo_pagamento as $tipopag)
            <option value="{{ $tipopag->id_tipo_pagamento }}" @selected($tipopag && $tipopag->id_tipo_pagamento == $tipopag->id_tipo_pagamento ? true : false)>
                {{ $tipopag->tipo_pagamento }}
            </option>
        @endforeach
    </select>


    <input type="number" name="total" id="total">

    <input type="submit" value="Cadastrar" class="btn btn-success">

</form>


@endsection
