@extends('layouts.base')

@section('conteudo')
    <!-- Link da frase da pizzaria -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

    <!-- Link do nome da pizzaria -->
    <link rel="preconnect" href="https://fonts.googleapis.com" type='text/css'>

    {{-- link fonte dos menus --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" type="/nostra/css">

    {{-- link fonte sobre nós --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" type='text/css'>


    <!-- CONTAINER DO SITE TODO -->
    <div class="container-fluid ">

        <div class="row" id="img-logo">
            <div class="col-11 ms-5 ms-5 me-3  d-flex justify-content-center">
                <img class=" me-3" style="height: 100px" src="/imagem/logo.png" alt="">
                <h3 class="me-5 d-none d-sm-block" id="frase">Pizza tradicional com um toque moderno!</h3>
            </div>



        </div>


        <div class="container mb-15px" style="">

            <!-- ROW MENU -->
            <div class="row mx-auto" id="color-menu">
                <div class="col-12" style="height: 150px;">

                    <div class="col-md-12 text-center mt-5 " id="nome-do-menu" style="height: 80px;">
                        <!-- <img class=" mt-3" style="height: 100px" src="/imagem/logo.png" alt=""> -->
                        <h1 class="nome-pizzaria">PIZZA NOSTRA</h1>
                        <!-- ICONS REDES SOCIAIS  -->
                        <div class="row  mt-5" style="width: 100px;">

                            <a class="col-1 icons-redes"
                                href="https://www.instagram.com/accounts/login/?__coig_restricted=1"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg>
                                <a class="col-1 ms-2 icons-redes" href="https://pt-br.facebook.com/">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                        fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                        <path
                                            d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                    </svg>
                                </a>
                            </a>
                            <a class="col-1 ms-2 icons-redes" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg>
                            </a>



                        </div>
                        <!-- /ICONS REDES SOCIAIS -->

                        <div class="row d-flex justify-content-end">
                            <div class="col-3 mb-3 text-end ">
                                <img class="ifood-logo" src="/imagem/img-ifood.png" style="width: 60px" alt="">
                                <img class="ifood-logo" src="/imagem/img-pepsi.png" style="width: 60px" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /ROW MENU -->

            <!-- ROW DA NAV -->
            <div class="row ">
                <div class="col-12">
                    <nav class="navbar d-none d-sm-block" id="background-nav">
                        <form class="container-fluid justify-content-center ">

                            <button class="btn me-2" id="btn-color" type="button">
                                <a class="nav-link icon-home" href="{{ route('index') }}"> <svg class="icon-home"
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" />
                                    </svg> Home</a>
                            </button>
                            <button class="btn me-2 " id="btn-color" type="button">
                                <a class="nav-link" href="{{ route('ProdutoCliente.index') }}">Cardápio</a>
                            </button>
                            <button class="btn me-2 " id="btn-color" type="button">
                                <a class="nav-link" href="bebidas.php">Bebidas</a>
                            </button>
                            <button class="btn me-2" id="btn-color" type="button">
                                <a class="nav-link" href="promocao.php">Fale Conosco</a>
                            </button>

                            <div class="col-xs-1 me-1 position-absolute top-50 end-0 translate-middle-y d-md- d-lg-block">
                                @guest
                                <a href="{{ route('register') }}" class="btn btn-sair" style="width: 90px" type="button">Registrar</a>
                                 <a href="{{ route('login') }}" class="btn btn-sair" style="width: 70px" type="button">Login</a>
                                @endguest

                                    @if (Auth()->check())
                                    @auth
                                    <a href="{{ route('logout') }}" class="btn btn-sair" style="width: 70px" type="button">Sair</a>
                                    <a class="btn btn-sair" style="width: 90px" type="button" href="{{ route('cliente.index') }}">Cadastro</a>
                                    @endauth
                                    @endif

                            </div>
                        </form>
                    </nav>
                </div>



                <div class="row  m-auto ">

                    <div class="col-12 m-auto backgroud-col-dropdown">
                        <div class="btn-dropdown d-sm-none ">
                            <div class="dropdown">
                                <button class="btn btn-secondary d-xs-block float-end " type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"
                                    width="10px" height="10">
                                    <h6 class="m-1">Menu <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                        </svg>
                                    </h6>

                                </button>


                                <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="index.php">Home</a></li>
                                    <li><a class="dropdown-item" href="promocao.php">Promoção</a></li>
                                    <li><a class="dropdown-item" href="cardapio.php">Cardápio</a></li>
                                    <li><a class="dropdown-item" href="bebidas.php">Bebidas</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>

            </div>


            <!-- ROW DA NAV -->




            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/imagem/img-pizza1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/imagem/img-pizza2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/imagem/img-pizza3.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="row ">
                <div class="col-12 ">
                    <div class="conteudo-index">
                        <div class="row">
                            <div class="col-11 m-auto mt-3 bg-sobrenos" style="height: 250px">
                                <h1 class="text-center mt-2 ">Sobre a Pizza Nostra</h1>
                                <div class="col-xs-11  m-auto">
                                    <h6 class="ms-2 mt-3 text-start bg-sobre-pizzaria">Inaugurada em julho de 2023, a Pizza
                                        Nostra está situada
                                        na Av. Ramiro Colleoni n°110 em Santo André, São Paulo. Neste curto período desde a
                                        sua inauguração, a pizzaria vem crescendo muito e conquistando o público local,
                                        graças ao seu atendimento diferenciado e de qualidade que lhe faz viajar por
                                        diferentes sabores.</h6>
                                </div>
                                <div class="col-2 m-auto text-center color-icons d-none d-sm-block">
                                    <img id="color-icons" src="imagem/icon-pizza.png" width="90px" alt="">
                                </div>
                            </div>
                        </div>




                        <div class="row mt-3">
                            <div class="col-12 text-center text-fluid d-xs-none d-lg-block" height="250px">
                                <img class="img-fluid" src="imagem/entregador.png" width="1050px" alt="">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="col-12 bg-rodape text-center" style="height: 90px">
                                    <a id="rodape" class="text-start">Termos de Uso |</a>
                                    <a id="rodape">Política de Privacidade</a>
                                    <p class="ano-pizza">
                                        <a id="rodape" class="" href="">
                                            <img class="m-auto" src="imagem/play.png"width="100px" alt="">
                                        </a>
                                        © 2023 Pizza Nostra.
                                    </p>


                                </div>
                            </div>
                        </div>




                    </div>


                </div>
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


        </div>





    </div>

    </div>

    <!-- /CONTAINER DO SITE TODO -->
@endsection
