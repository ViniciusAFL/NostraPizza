@extends('layouts.base')
@section('conteudo')
    @include('layouts.menu')


    <div class="container ">
        <div class="container cont-produto">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center p-2" style="color: #d1d1d1">
                        <img src="imagem/pizza-produtos.png" style="width: 100px" alt="">
                        Produtos
                    </h1>
                </div>
            </div>
            <a href="{{ route('produto.create') }}" class="btn btn-clientes">
                Novo Produto
            </a>

            <p>{{ $produtos->onEachSide(5)->links() }}</p>

            {{-- Alerts --}}
            {{-- @include('layouts.partials.alerts') --}}
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th class="col-2">Ações</th>
                        <th class="col-1">ID</th>
                        <th>Produto</th>
                        <th>Observações</th>
                        <th>Qtd Tamanhos</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($produtos as $produto)
                        <tr>
                            <td>
                                <a class="btn btn-clientes"
                                    href="{{ route('produto.edit', ['id' => $produto->id_produto]) }}">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a class="btn btn-clientes"
                                    href="{{ route('produto.show', ['id' => $produto->id_produto]) }}">
                                    <i class="fa-solid fa-eye"></i>
                                </a>

                                <button type="button" class="btn btn-clientes ml-1" data-bs-toggle="modal"
                                    data-bs-target="#modalExcluir"
                                    data-identificacao="Nº {{ $produto->id_produto }} : {{ $produto->nome }}"
                                    data-url="{!! route('produto.destroy', ['id' => $produto->id_produto]) !!}">
                                    <span data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Excluir">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                </button>
                                {{-- <a class="btn btn-danger" href="{{ route('produto.destroy', ['id' => $produto->id_produto]) }}">
                            <i class="fa-solid fa-trash-can"></i>
                        </a> --}}
                            </td>
                            <td>
                                {{ $produto->id_produto }}

                            </td>
                            <td>
                                {{ $produto->nome }}
                                @if ($produto->foto)
                                    <br>
                                    <img src="{{ url('storage/fotos' . $produto->foto) }}" lass="img-thumbnail"
                                        width="250">
                                @endif
                            </td>
                            <td>{{ nl2br($produto->observacoes) }}</td>
                            <td>
                                {!! $produto->tamanhos()->count() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    {{-- MODAL EXCLUSÃO --}}
    {{-- @include('layouts.partials.modalExcluir') --}}
@endsection
