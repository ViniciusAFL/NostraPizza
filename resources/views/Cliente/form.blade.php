@extends('layouts.base')

@section('conteudo')

@include('layouts.menu')

<link rel="stylesheet" href="{{ asset('nostra.css') }}">

<div class="container indexcli" style="color: #fff">
<div class="row">
    <form action="{{ route('cliente.store') }}" method="post">
        @csrf
            <div class="col-md-12">
                <h1>Cadastrar informações</h1>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome" required>
                     </div>

                     <div class="form-group">
                        <label for="">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu email" required>
                     </div>
                </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">DDD</label>
                            <input type="text" class="form-control" name="ddd" id="ddd" placeholder="Digite seu ddd">
                         </div>

                         <div class="form-group">
                            <label for="">Celular</label>
                            <input type="tel" class="form-control" name="celular" id="celular" placeholder="Digite seu Celular" required>
                         </div>
                    </div>


                <h2>Cadastrar endereço:</h2>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Endereço</label>
                        <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereco" required>
                     </div>

                     <div class="form-group">
                        <label for="">Numero</label>
                        <input type="number" class="form-control" name="numero" id="numero" placeholder="numero" required>
                     </div>

                     <div class="form-group">
                        <label for="">complemento</label>
                        <input type="text" class="form-control" name="complemento" id="complemento" placeholder="complemento">
                     </div>

                     <div class="form-group">
                        <label for="">Bairro</label>
                        <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Digite seu Bairro" required>
                     </div>

                     <div class="form-group">
                        <label for="">Cidade</label>
                        <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" required>
                     </div>

                     <div class="form-group">
                        <label for="">UF</label>
                        <input type="text" class="form-control" name="uf" id="uf" placeholder="UF" required>
                     </div>

                     <div class="form-group">
                        <label for="">CEP</label>
                        <input type="number" class="form-control" name="cep" id="cep" placeholder="CEP" required>
                     </div>
                </div>
                <button class="btn btn-success mt-2" type="submit">Cadastrar</button>
            </form>
        </div>

@endsection
