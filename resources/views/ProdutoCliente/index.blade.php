@extends('layouts.base')

@section('conteudo')
    @include('layouts.menu')


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
            <div class="col-12">
                <H1><i class="fa-solid fa-plate-wheat"></i> Cardápio - Pizzas</H1>
            </div>
        </div>






            <div class="container" >



                    <div class="row bg-danger " >

                        @foreach ($produtos as $produto)
                        <div class="col-3 bg-success">

                            <div class="card d-flex justify-content-cen" style="width: 250px; height: 250px; margin:10px; padding: 10px;">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title" > <?php echo $produto->nome; ?></h5>
                                    <p class="card-text" style="font-size: 15px; ">

                                    </p>
                                    <a href="{{ route('produto.show', ['id' => $produto->id_produto]) }}"
                                        class="btn btn-primary">Ver</a>
                                    <a href="#" class="btn btn-success">Comprar</a>
                                </div>
                            </div>

                        </div>
                        @endforeach
                    </div>
                    </div>


            </div>





            </div>



    </body>

    @include('layouts.rodape')
    @endsection
    @section('scripts')

</html>
