@extends('layouts.base')

@section('conteudo')

    @include('layouts.menu')
    <link rel="stylesheet" href="{{ asset('nostra.css') }}">
    @can('indexcli')
        <div class="container">
            <h1 style="color:#d1d1d1"> - Área Administrativa</h1>
            <h2 style="color: ##d1d1d1"><a class="btn btn-primary" href="{{ route('cliente.create') }}">Cadastrar cliente</a></h2>
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
                        $clientes = DB::table('clientes')
                            ->orderby('id_cliente')
                            ->paginate(20);
                    @endphp

                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>
                                <a class="btn btn-warning"
                                    href="{{ route('cliente.edit', ['id_cliente' => $cliente->id_cliente]) }}">Editar</a>
                                <a class="btn btn-success"
                                    href="{{ route('cliente.show', ['id_cliente' => $cliente->id_cliente]) }}">Ver</a>
                            </td>

                            <td>{{ $cliente->id_cliente }}</td>
                            <td>{{ $cliente->nome }}</td>
                            <td>{{ $cliente->celular }}</td>
                            <td>{{ $cliente->email }}</td>
                            <td>{{ nl2br($cliente->observacoes) }}</td>

                        </tr>
                </tbody>
                @endforeach

                <div class="paginate">
                    {{ $clientes->links() }}
                </div>
        </div>

        </div>
    @endcan

    @cannot('indexcli')
        <div class="container cont-cliente">
            <div class="container bg-cont-cliente">
                <h1 class="p-4 text-center" style="color: #d1d1d1" class="text-center"> Área Administrativa</h1>
                <h2 style="color: #d1d1d1"><a class="btn-clientes" href="{{ route('cliente.create') }}">Cadastrar cliente</a>
                </h2>
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
                            $clientes = DB::table('clientes')
                                ->orderby('id_cliente')
                                ->paginate(20);
                        @endphp

                        @foreach ($clientes as $cliente)
                            @if ($cliente->deleted_at != null)
                                <td colspan="6" style="text-align: center">
                                    Cliente deletado
                                </td>
                            @else
                                <tr>
                                    <td>
                                        <a class="btn btn-clientes" style="width: 72px"
                                            href="{{ route('cliente.edit', ['id_cliente' => $cliente->id_cliente]) }}">Editar

                                        </a>

                                        <a class="btn btn-clientes mt-2"
                                            href="{{ route('cliente.show', ['id_cliente' => $cliente->id_cliente]) }}"
                                            style="width: 72px">Ver</a>
                                        <form action="{{ route('cliente.destroy', ['id_cliente' => $cliente->id_cliente]) }}"
                                            method="POST">
                                            @csrf
                                            @method('Delete')
                                            <button class="btn btn-clientes mt-2"
                                            style="width: 72px" href="{{ route('cliente.destroy', ['id_cliente' => $cliente->id_cliente]) }}">Excluir</button>
                                        </form>
                                    </td>

                                    <td>{{ $cliente->id_cliente }}</td>
                                    <td>{{ $cliente->nome }}</td>
                                    <td>{{ $cliente->celular }}</td>
                                    <td>{{ $cliente->email }}</td>
                                    <td>{{ nl2br($cliente->observacoes) }}</td>

                                </tr>
                    </tbody>
                    @endif
                    @endforeach



                    <div class="paginate mt-3">
                        {{ $clientes->links() }}
                    </div>


            </div>

        </div>
    @endcannot

@endsection
