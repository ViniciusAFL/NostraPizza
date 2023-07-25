@extends('layouts.base')

@section('conteudo')

@include('ProdutoCliente.partials.menu')


@can('indexcli')
<h1 class="corfont"> Cadastro cliente</h1>

@foreach ($clientes as $cliente )
    <input type="hidden" name="cliente">
@endforeach

@foreach ($endereco as $endereco )
    <td>
        <input type="hidden" name="endereco">
    </td>
@endforeach

@foreach ($clientesEndereco as $clientesEndereco )
    <input type="hidden" name="clientesEndereco">
@endforeach

<p class="corfont">Olá {{auth()->user()->nome}} {{$cliente->id_cliente}}</p>
<a href="{{ route('cliente.show', ['id'=>$cliente->id_cliente]) }}">VER</a>
@if ($cliente->email == auth()->user()->email)

@endif

@if (auth()->user()->email || $cliente->email == null)
    <a href="{{ route('cliente.create') }}">Cadastrar</a>
@endif



@if ($cliente->id_cliente && $clientesEndereco->cliente->id_cliente && $clientesEndereco->endereco->id_endereco == $endereco->id_endereco)
    <p class="corfont">
        Seu endereco:
        {{!!
            $clientesEndereco->endereco
        !!}}
        <table class="table">
            <thead>
                <td>ID</td>
                <td>Endereco</td>
                <td>Numero</td>
                <td>Complemento</td>
                <td>Bairro</td>
                <td>Cidade</td>
                <td>UF</td>
                <td>Cep</td>
            </thead>
            <tbody>
                <td>{{$endereco->id_endereco}}</td>
                <td>{{$endereco->endereco}}</td>
                <td>{{$endereco->numero}}</td>
                <td>{{$endereco->complemento}}</td>
                <td>{{$endereco->bairro}}</td>
                <td>{{$endereco->cidade}}</td>
                <td>{{$endereco->uf}}</td>
                <td>{{$endereco->cep}}</td>
            </tbody>
        </table>

    </p>


@else
<p>Endereço não cadastrado</p>
@endif
@endcan

@cannot('indexcli')
<h1 class="corfont"> - Aréa Administrativa</h1>
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
