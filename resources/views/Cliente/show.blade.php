@extends('layouts.base')

@section('conteudo')
    @include('layouts.menu')

    <link rel="stylesheet" href="{{ asset('nostra.css') }}">

    <div class="container cont-show-cliente ">

        <div class="container bg-show-cliente">
            <h1 class="text-center p-3" style="color: #d1d1d1">Detalhes do Cliente/Cadastrar Pedidos</h1>

            <a class="btn btn-clientes mt-3"
                href="{{ route('createEndereco', ['id_cliente' => $cliente->id_cliente]) }}">Cadastrar Endereço</a>

            <h2 class="mt-3" style="color: #d1d1d1">Detalhes do cliente:</h2>

            <div class="row">
                <div class="col col-clientes-show">
                    <p class="mt-3">Nome: {{ $cliente->nome }}</p>
                    <p>Email: {{ $cliente->email }}</p>
                    <p>Telefone: {{ $cliente->celular }}</p>
                    <p>DDD: {{ $cliente->ddd }}</p>
                </div>
            </div>

            <div class="col-11 m-auto">

            @foreach ($enderecos as $endereco)
                <input type="hidden" name="id_endereco">
            @endforeach

            <h2 class="mt-3" style="color: #d1d1d1">Endereço do cliente:</h2>


            @foreach ($clientesEndereco as $cliend)
                @if ($cliente->id_cliente == $cliend->cliente->id_cliente && $cliend->cliente->deleted_at == null)
                    <table class="table mt-3">
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
                                    <a class="btn btn-clientes mt-1" style="width: 80px"
                                        href="{{ route('editEndereco', [
                                            'id_cliente' => $cliend->cliente->id_cliente,
                                            'id_endereco' => $cliend->endereco->id_endereco,
                                        ]) }}">
                                        Editar</a>

                                    <form
                                        action="{{ route('destroyCliend', [
                                            'id_cliente' => $cliend->cliente->id_cliente,
                                            'id_endereco' => $cliend->endereco->id_endereco,
                                        ]) }}"
                                        method="POST">
                                        @csrf
                                        @method('Delete')
                                        <button class="btn btn-clientes mt-1" style="width: 80px"
                                            href="{{ route('destroyCliend', [
                                                'id_cliente' => $cliend->cliente->id_cliente,
                                                'id_endereco' => $cliend->endereco->id_endereco,
                                            ]) }}">Excluir</button>
                                    </form>

                                    <a class="btn btn-clientes mt-1" style="width: 80px"
                                        href="{{ route('pedido.create', [
                                            'id_cliente' => $cliente->id_cliente,
                                            'id_cliente_endereco' => $cliend->id_cliente_endereco,
                                        ]) }}">Criar
                                        pedido</a>


                                </td>

                                <td>{{ $cliend->endereco->id_endereco }}</td>
                                <td>{{ $cliend->endereco->endereco }}</td>
                                <td>{{ $cliend->endereco->numero }}</td>
                                <td>{{ $cliend->endereco->bairro }}</td>
                                <td>{{ $cliend->endereco->cidade }}</td>
                                <td>{{ $cliend->endereco->cep }}</td>
                                <td>{{ $cliend->endereco->uf }}</td>

                            </tr>
                        </tbody>
                @endif
            @endforeach
            </table>
        </div>
        </div>
    </div>
@endsection
