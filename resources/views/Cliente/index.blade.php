@extends('layouts.base')

@section('conteudo')

    @include('layouts.menu')

    @can('indexcli')
    <link rel="stylesheet" href="{{ asset('nostra.css') }}">

    <div class="container indexcli">
        <h1 style="color:#FFF"> - Área Administrativa</h1>
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
                                href="{{ route('cliente.edit', ['id' => $cliente->id_cliente]) }}">Editar</a>
                            <a class="btn btn-success"
                                href="{{ route('cliente.show', ['id' => $cliente->id_cliente]) }}">Ver</a>
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
        <link rel="stylesheet" href="{{ asset('nostra.css') }}">
        <div class="container indexcli">
            <h1 style="color:#FFF"> - Área Administrativa</h1>
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
                                    href="{{ route('cliente.edit', ['id' => $cliente->id_cliente]) }}">Editar</a>
                                <a class="btn btn-success"
                                    href="{{ route('cliente.show', ['id' => $cliente->id_cliente]) }}">Ver</a>
                                <form action="{{ route('cliente.destroy', ['id' => $cliente->id_cliente]) }}" method="POST">
                                    @csrf
                                    @method('Delete')
                                    <button class="btn btn-danger"
                                        href="{{ route('cliente.destroy', ['id' => $cliente->id_cliente]) }}">Excluir</button>
                                </form>
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
    @endcannot

@endsection
