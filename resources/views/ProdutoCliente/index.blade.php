@extends('layouts.base')

@section('conteudo')

    <h1>Produtos</h1>


    @foreach ($produtos as $produto)


    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> {{$produto->nome}}</h5>
              <p class="card-text"> {{$produto->descricao}}</p>
            </div>
            <a class="btn btn-success mb-2" href="{{ route('ProdutoCliente.show', ['id'=>$produto->id_produto]) }}">Ver</a>
            <a class="btn btn-success mb-2" href="#">Comprar</a>
          </div>
        </div><br>
        <div class="col">
          <div class="card h-100">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$produto->nome}}</h5>
              <p class="card-text">{{$produto->descricao}}</p>
            </div>
            <a class="btn btn-success mb-2" href="{{ route('ProdutoCliente.show', ['id'=>$produto->id_produto]) }}">Ver</a>
            <a class="btn btn-success mb-2" href="#">Comprar</a>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$produto->nome}}</h5>
              <p class="card-text">{{$produto->descricao}}</p>
            </div>
            <a class="btn btn-success mb-2" href="{{ route('ProdutoCliente.show', ['id'=>$produto->id_produto]) }}">Ver</a>
            <a class="btn btn-success mb-2" href="#">Comprar</a>
          </div>
        </div>
      </div>
      @endforeach

@endsection
@section('scripts')
@endsection


