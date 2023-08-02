@extends('layouts.base')

@section('conteudo')
    @include('layouts.menu')

    <link rel="stylesheet" href="{{ asset('nostra.css') }}">

    <div class="container container-cadastrar-end">

        <div class="container container-cadastrar-end-2">

                <div class="row">
                    <h1 style="color: #d1d1d1" class="text-center p-2">Cadastrar Endereço</h1>
                </div>

                <form class="mt-4 ms-3" action="{{ route('enderecoStore') }}" method="post" style="color: #FFF">
                    @php
                        if (isset($_GET['id_cliente']) && $_GET['id_cliente'] != '') {
                            $clientes = Clientes::class;
                            $clientes = $_GET['id_cliente'];
                            echo '<input type="hidden" name="id_cliente">';
                        }
                    @endphp

                    @csrf
                    <input type="hidden" name="id_cliente" value="{{ $clientes = $_GET['id_cliente'] }}">


                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mt-2 label-cadastrar-end" for="">Endereço</label>
                            <input type="text" class="form-control input-form-clientes" name="endereco" id="endereco" placeholder="Digite seu ndereco"
                                required>
                        </div>

                        <div class="form-group">
                            <label class="mt-2 label-cadastrar-end" for="">Numero</label>
                            <input type="number" class="form-control input-form-clientes" name="numero" id="numero" placeholder="Digite seu número"
                                required>
                        </div>

                        <div class="form-group">
                            <label class="mt-2 label-cadastrar-end" for="">Complemento</label>
                            <input type="text" class="form-control input-form-clientes" name="complemento" id="complemento"
                                placeholder="">
                        </div>

                        <div class="form-group">
                            <label class="mt-2 label-cadastrar-end" for="">Bairro</label>
                            <input type="text" class="form-control input-form-clientes" name="bairro" id="Digite seu bairro"
                                placeholder="Digite seu Bairro" required>
                        </div>

                        <div class="form-group">
                            <label class="mt-2 label-cadastrar-end" for="">Cidade</label>
                            <input type="text" class="form-control input-form-clientes" name="cidade" id="cidade" placeholder="Digite sua cidade"
                                required>
                        </div>

                        <div class="form-group">
                            <label class="mt-2 label-cadastrar-end" for="">UF</label>
                            <input type="text" class="form-control input-form-clientes" name="uf" id="uf" placeholder="UF"
                                required>
                        </div>

                        <div class="form-group">
                            <label class="mt-2 label-cadastrar-end" for="">CEP</label>
                            <input type="number" class="form-control input-form-clientes" name="cep" id="cep" placeholder="CEP"
                                required>
                        </div>

                        <input class="mt-3 btn-clientes" type="submit" value="Cadastrar">

                </form>

        </div>
        @include('layouts.rodape')
    </div>

@endsection
