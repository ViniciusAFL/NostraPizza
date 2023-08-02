@extends('layouts.base')

@section('conteudo')

<h1>Produtos</h1>

        @foreach ($produtos->get() as $produto)

        <div class="card" style="width: 18rem; padding: 3%;">
            <div class="card-body">
              <h5 class="card-title">{{$produto->nome}}</h5>
              {{-- <p class="card-text">{{$produto->descricao}}</p> --}}
            <h6>{{$produto->id_produto}}</h6>
            </div>

            <a class="btn btn-warning" href="{{ route('produto.edit', ['id'=>$produto->id_produto]) }}">Editar</a>
            <a class="btn btn-success" href="{{ route('produto.show', ['id'=>$produto->id_produto]) }}">Ver</a>
            <a class="btn btn-danger" href="{{ route('produto.destroy', ['id'=>$produto->id_produto]) }}">Excluir</a>
        </div>

        @endforeach






@endsection
@section('scripts')

@endsection
