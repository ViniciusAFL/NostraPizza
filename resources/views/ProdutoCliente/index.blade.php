@extends('layouts.base')

@section('conteudo')

@include('ProdutoCliente.partials.menu')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produto </title>
</head>
<body>



<div class="row text-center">
    <H1><i class="fa-solid fa-plate-wheat"></i> Cardápio - Pizzas</H1>
</div>

    @foreach ($produtos as $produto)


    {{-- <div class="row row-cols-1 row-cols-md-3 g-4">
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
        </div> --}}
    <div class="row dicas mt-3">
        <div class="col-sm-4 card"style="padding: 3%;">
            <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($produto->foto) .'" height="auto" width="300px" />'; ?>
                <h2><?php echo $produto->nome;?></h2>
                <div class="flex-row">
                <!-- Mostrar -->
                     <a class="btn btn-success " href="{{ route('ProdutoCliente.show', ['id'=>$produto->id_produto]) }}?>">Descrição da produto
                         <i class="bi bi-eye-fill"></i>
                        </a>
                         <!-- Mostrar -->
                         <a class="btn btn-primary " href="#">Comprar

                  </a>
                </div>
            </div>


        </div>

      @endforeach
    </body>
    @include('layouts.rodape')
@endsection
@section('scripts')
@endsection
</html>



