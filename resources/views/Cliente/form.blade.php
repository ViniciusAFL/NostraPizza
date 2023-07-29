@extends('layouts.base')

@section('conteudo')

@include('layouts.menu')

<link rel="stylesheet" href="{{ asset('nostra.css') }}">

<div class="container indexcli" style="color: #fff">
<div class="row">
    <form action="{{ route('cliente.store') }}" method="post">
        @csrf
            <div class="col-md-12">
                <h1>Cadastrar informações Cliente</h1>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome" required>
                     </div>

                     <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu email" required>
                     </div>
                </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ddd">DDD</label>
                            <input type="text" class="form-control" name="ddd" id="ddd" placeholder="Digite seu ddd">
                         </div>

                         <div class="form-group">
                            <label for="celular">Celular</label>
                            <input type="tel" class="form-control" name="celular" id="celular" placeholder="Digite seu Celular" required>
                         </div>
                    </div>

                <button class="btn btn-success mt-2" type="submit">Cadastrar</button>
            </form>
        </div>

@endsection
