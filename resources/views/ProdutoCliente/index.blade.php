@extends('layouts.base')

@section('conteudo')
    @include('layouts.menu')
        <link rel="stylesheet" href="{{ asset('nostra.css') }}">

    <body>

        <div class="container bg-cardapio">
            <div class="container bg-container-cardapio">

                <div class="row text-center">

                    <div class="col-12 mt-3 d-flex justify-content-center cardapio-name bg-container-cardapio">
                        <h1><i class="fa-solid fa-plate-wheat"></i> Cardápio - Pizzas</h1>
                    </div>
                    <div class="col-xs-5 d-flex justify-content-end">
                        <form class="mt-3 me-3" action="{{ route('pesquisa.filtrar') }}" method="GET">
                            <input class="input-contato input-pesquisar" style="height: 40px" type="text" name="termo_pesquisa"
                                placeholder="Digite sua pesquisa">
                            <!-- Outros campos de filtro, se necessário -->
                            <button class="button-pesquisar btn" style="height: 40px" type="submit"><i class="bi bi-search"></i></button>
                        </form>

                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-4 g-4">

                    @foreach ($produtos as $produto)
                        <div class="col-12 col-xs-3 mt-5 ">
                            <div class="card m-auto card-cardapio text-center" style="width: 250px; height: 250px; margin:10px; padding: 10px;">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"> <?php echo $produto->nome; ?></h5>
                                    <p class="card-text" style="font-size: 15px; ">
                                    </p>
                                    <a href="{{ route('produto.show', ['id' => $produto->id_produto]) }}"
                                        class="btn " id="btn-comprar-ver">Ver</a>

                                    <a href="#" class="btn " id="btn-comprar-ver">Comprar</a>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>


            </div>
            @include('layouts.rodape')
        </div>

        <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="/imagem/logo.png" style="height: 40px" alt=""></button>


        <script>
            // Get the button
            let mybutton = document.getElementById("myBtn");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>



    </body>


@endsection
@section('scripts')

    </html>
