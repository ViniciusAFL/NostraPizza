@extends('layouts.base')

@section('conteudo')

<h1>TESTE</h1>

<a class="btn btn-danger mb-2" href="{{ route('tamanho.create') }}">Cadastrar</a>

@foreach ($tamanhos as $tamanho )

<table class="table">
    <thead>
      <tr>
        <th scope="col">Ações</th>
        <th scope="col">Observações</th>
        <th scope="col">ID</th>
        <th scope="col">Preço</th>
        <th scope="col">Promoção</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
            <form action="{{ route('tamanho.destroy', ['id'=>$tamanho->id_produto_tamanho]) }}" method="post">
                @csrf
                @method('delete')
            <button type="submit" class="btn btn-danger">Excluir</button>

            </form>
            <a class="btn btn-warning" href="{{ route('tamanho.edit', ['id'=>$tamanho->id_produto_tamanho]) }}">Atualizar</a>
        </td>

        <td>
            {{$tamanho->observacoes}}
        </td>
        <td>{{$tamanho->id_produto_tamanho}}</td>
        <td>{{$tamanho->preco}}</td>
        <td>{{$tamanho->preco_promocao}}</td>


      </tr>
    </tbody>
  </table>
  @endforeach
@endsection
