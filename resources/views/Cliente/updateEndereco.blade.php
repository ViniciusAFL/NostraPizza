@extends('layouts.base')

@section('conteudo')

@include('layouts.menu')

<link rel="stylesheet" href="{{ asset('nostra.css') }}">

<div class="container" style="color: #FFF">

    <h1>Atualizar Endereço {{$cliend->endereco->id_endereco}}</h1>

    <form action="{{ route('updateEndereco',
    ['id_cliente' => $cliend->cliente->id_cliente,
    'id_endereco' => $cliend->endereco->id_endereco] ) }}" style="color: #FFF" method="POST">
    {{-- @dd($cliend->cliente->id_cliente, $cliend->endereco->id_endereco) --}}
        @csrf
        @method('POST')
        <div class="col-md-6">
             <div class="form-group">

                @if ($cliend->endereco->endereco == null)
                    <p>Esse endereço não existe.</p>

                @else
                <label for="">Endereço</label>
                    <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereco" required
                    value="{{$cliend->endereco->endereco && $cliend->endereco->endereco != '' ?
                    $cliend->endereco->endereco : old(endereco) }}">
                </div>
                @endif



              <div class="form-group">

            @if ($cliend->endereco->numero == null)
            <p>Numero não cadastrado</p>

            @else
                <label for="">Numero</label>
                <input type="text" class="form-control" name="numero" id="numero" placeholder="numero" required
                value="{{$cliend->endereco->numero && $cliend->endereco->numero != '' ?
                $cliend->endereco->numero : old(numero) }}">
                </div>
             @endif


             <div class="form-group">
                @if ($cliend->endereco->complemento)
                    <p>Endereço não possui um complemento</p>

                    @else
                    <label for="">complemento</label>
                    <input type="text" class="form-control" name="complemento" id="complemento" placeholder="complemento" required
                    value="{{$cliend->endereco->complemento && $cliend->endereco->complemento != '' ?
                    $cliend->endereco->numero : old(complemento) }}">
                    </div>
                    @endif


              <div class="form-group">
                <label for="">Bairro</label>
                @if ($cliend->endereco->bairro == null)
                    @else
                    <input type="text" class="form-control" name="bairro" id="bairro" placeholder="bairro" required
                    value="{{$cliend->endereco->bairro && $cliend->endereco->bairro != '' ?
                    $cliend->endereco->bairro : old(bairro) }}">
                        <p>Esse endereço não possui um bairro.</p>
                    @endif


             </div>

              <div class="form-group">
                @if ($cliend->endereco->cidade == null)
                    <p>Esse endereço não possui uma cidade.</p>

                @else
                <label for="">Cidade</label>
                <input type="text" class="form-control" name="cidade" id="cidade" placeholder="cidade" required
                value="{{$cliend->endereco->cidade && $cliend->endereco->cidade != '' ?
                $cliend->endereco->cidade : old(cidade) }}">
             </div>
                @endif


              <div class="form-group">

                @if ($cliend->endereco->uf == null)
                    <p>Esse endereço não possui um UF</p>

                    @else
                    <label for="">UF</label>
                    <input type="text" class="form-control" name="uf" id="uf" placeholder="uf" required
                    value="{{$cliend->endereco->uf && $cliend->endereco->uf != '' ?
                    $cliend->endereco->uf : old(uf) }}">
                 </div>
                @endif



              <div class="form-group">
                @if ($cliend->endereco->cep == null)
                    <p>Esse endereço não possui um cep</p>
                @else
                <label for="">CEP</label>
                <input type="text" class="form-control" name="cep" id="cep" placeholder="cep" required
                value="{{$cliend->endereco->cep && $cliend->endereco->cep != '' ?
                $cliend->endereco->cep : old(cep) }}">
                </div>
                @endif


             <input type="submit" value="Atualizar">
    </form>




</div>

@endsection
