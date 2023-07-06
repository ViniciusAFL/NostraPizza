@extends('layouts.base')

@section('conteudo')

    <h1>Promoções</h1>


    @foreach ($promocao as $promocao)


    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> {{$promocao->id_produto_tamanho}}</h5>
              <p class="card-text">R${{$promocao->preco_promocao}}</p>
              <p class="card-text"> {{$promocao->observacoes}}</p>
            </div>
            <a class="btn btn-success mb-2" href="{{ route('PromocaoCli.show', ['id'=>$promocao->id_produto_tamanho]) }}">Ver</a>
            <a class="btn btn-success mb-2" href="#">Comprar</a>
          </div>
        </div><br>
      </div>
      @endforeach

@endsection
@section('scripts')
@endsection


