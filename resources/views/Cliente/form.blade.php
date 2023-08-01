@extends('layouts.base')

@section('conteudo')
    @include('layouts.menu')

    <link rel="stylesheet" href="{{ asset('nostra.css') }}">

    <div class="container " style="color: #d1d1d1">
        <div class="container cont-cliente bg-cont-cliente">
        <div class="row">
            <form class="" action="{{ route('cliente.store') }}" method="post">
                @csrf
                <div class="col-md-12">
                    <h1 class="text-center p-2">Cadastrar informações Cliente</h1>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="label-cliente-edit mt-3" for="nome">Nome</label>
                            <input class="input-form-clientes ms-3" type="text" class="form-control" name="nome" id="nome"
                                placeholder="Digite seu nome" required>
                        </div>

                        <div class="form-group">
                            <label class="label-cliente-edit mt-3" for="email">E-mail</label>
                            <input class="input-form-clientes ms-2" type="email" class="form-control" name="email" id="email"
                                placeholder="Digite seu email" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="label-cliente-edit mt-3 ms-4" for="ddd">DDD</label>
                            <input class="input-form-clientes ms2" type="text" class="form-control" name="ddd" id="ddd"
                                placeholder="Digite seu ddd">
                        </div>

                        <div class="form-group">
                            <label class="label-cliente-edit mt-3" for="celular">Celular</label>
                            <input class="input-form-clientes ms-1" type="tel" class="form-control" name="celular" id="celular"
                                placeholder="Digite seu Celular" required>
                        </div>
                    </div>

                    <button class="btn btn-clientes mb-3 mt-3" type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
    @endsection
