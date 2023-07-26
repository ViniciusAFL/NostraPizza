@extends('layouts.base')

@section('conteudo')

@include('ProdutoCliente.partials.menu')


@can('indexcli')
<h1 style="color: #FFF"> Cadastro cliente</h1>

@foreach ($clientes as $cliente)
    <input type="hidden" name="id_cliente" id="id_cliente">
    <input type="hidden" name="email" id="email">
@endforeach


<a href="{{ route('cliente.show', ['id'=>$clientes->id_cliente]) }}">VER</a>






@endcan



@cannot('indexcli')
<h1 style="color:#FFF"> - Aréa Administrativa</h1>
<table class="table">
    <thead>
        <tr>
            <th>Ações</th>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>E-Mail</th>
            <th>Observações</th>
        </tr>
    </thead>

    <tbody>

        @php
            $clientes = DB::select('select * from clientes')
        @endphp

           @foreach ($clientes as $cliente)
        <tr>
            <td>
                <a class="btn btn-warning" href="{{ route('cliente.edit', ['id'=>$cliente->id_cliente]) }}">Editar</a>
                <a class="btn btn-success" href="{{ route('cliente.show', ['id'=>$cliente->id_cliente]) }}">Ver</a>
                <form action="{{ route('cliente.destroy', ['id' => $cliente->id_cliente]) }}" method="POST">
                    @csrf
                    @method('Delete')
                    <button class="btn btn-danger" href="{{ route('cliente.destroy', ['id'=>$cliente->id_cliente]) }}">Excluir</button>
                </form>
            </td>

            <td>{{$cliente->id_cliente}}</td>
            <td>{{$cliente->nome}}</td>
            <td>{{$cliente->celular}}</td>
            <td>{{$cliente->email}}</td>
            <td>{{nl2br($cliente->observacoes)}}</td>

        </tr>
        @endforeach
    </tbody>

</table>

@endcannot





</div>
@endsection
