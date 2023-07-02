@extends('layouts.base')

@section('conteudo')
    {{-- tabela index - cargo --}}
    <h1>Produtos</h1>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Ações</th>
                <th>ID</th>
                <th>Produtos</th>
                <th>Descrições</th>
                <th>Foto</th>
                <th>Criação</th>
                <th>Atualização</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)

            <tr>
                <td>
                    <a href="{{ route('produto.edit',['id'=>$produto->id_produto])}}">
                        <i class="bi bi-pencil-square"></i>
                    </a>

                    <a href="{{ route('produto.show', ['id'=>$produto->id_produto]) }}">
                        <i class="bi bi-eye"></i>
                    </a>
                    <a href="{{ route('produto.destroy', ['id'=>$produto->id_produto]) }}">
                        <i class="bi bi-trash"></i>
                    </a>
                </td>
                <td>
                    {{$produto->id_produto}}
                </td>
                <td>
                    {{$produto->nome}}
                </td>
                <td>
                    {{$produto->descricao}}
                </td>
                <td>
                    {{$produto->foto}}
                </td>
                <td>
                    {{$produto->created_at}}
                </td>
                <td>
                    {{$produto->updated_at}}
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>

@endsection
@section('scripts')
@endsection

