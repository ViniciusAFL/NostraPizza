@extends('layouts.base')

@section('conteudo')

@include('layouts.menu')

<link rel="stylesheet" href="{{ asset('nostra.css') }}">

<div class="container">





    @php
    if (isset($_GET['id_endereco']) && $_GET['id_endereco'] != '')
    {
    $cliend= ClienteEndereco::class;
    $cliend = ($_GET['id_endereco']);
     echo '<input type="hidden" name="id_endereco">' ;
    }
    @endphp

    @dd($cliend)

    <form action="{{ route('endereco.update', ['id'=>$cliend->endereco->id_endereco]) }}" method="post" style="color: #FFF">
        <input type="hidden" name="id_endereco" value="@php $_GET= 'id_endereco' @endphp">

        <div class="col-md-6">
            <div class="form-group">
                <label for="">Endereço</label>
                {{-- <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereco" required
                value="{{$cliend->endereco && $cliend->endereco != '' ?
                $cliend->endereco: old(endereco) }}"> --}}
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

             <input type="submit" value="Cadastrar">

    </form>
    </form>
</div>

@endsection
