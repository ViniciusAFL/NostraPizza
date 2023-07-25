@extends('layouts.base')

@section('conteudo')
    @include('layouts.menu')

    <div class="container">

        <div class="col-12 m-auto container-contato">
            <form class="form-contato " action="{{ route('contato.send') }}" method="POST">
                @csrf

                <div class="col-sm-4">
                    <div class="form-group">
                        <label class=" label-contato mt-3 ms-2" for="">Nome*</label>
                        <input type="text" class="form-control input-contato" style="width: 100%" height="90px" name="name"
                            placeholder="Digite seu nome" required>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group mt-3">
                        <label class="label-contato ms-2" for="">E-mail*</label>
                        <input type="text" class="form-control input-contato" style="width: 100%" name="email"
                            placeholder="Digite seu email" required>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group mt-3">
                        <label class=" label-contato ms-2" for="">Assunto</label>
                        <input type="text" class="form-control input-contato" style="width: 100%" name="subject"
                            placeholder="Digite o Assunto" required>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="mt-2 form-group">
                        <textarea name="message" class="form-control input-contato" placeholder="Mensagem aqui... "></textarea>
                    </div>
                </div>

                <button type="submit" class="mt-3 btn btn-block btn-success ms-2" id="btn-contato">Send Email</button>
            </form>

            <div class="row d-flex justify-content-end">
                <div class="col-7 me-5 imagem-contato d-none d-sm-block">
                    <div class="col-11 text-center ms-3 fale-conosco-nome">
                        <h2 class="">Fale Conosco</h2>
                    </div>
                    <img src="imagem/fale.jpg" width="100%" alt="">
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
@endsection
