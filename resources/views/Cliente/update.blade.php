@extends('layouts.base')

@section('conteudo')
    @include('layouts.menu')


    <link rel="stylesheet" href="{{ asset('nostra.css') }}">

    <div class="container cont-clientes-edit-1" style="height: 500px">

        <div class="container cont-cliente-edit" style="height: 300px">
            <form class="mt-3 p-3" action="{{ route('cliente.update', ['id_cliente' => $cliente->id_cliente]) }}" method="post">


                @csrf

                <label class="label-cliente-edit ms-2" for="nome">Nome</label>
                <input class="input-create-user p-2 ms-2" type="text" name="nome" id="nome"
                    value="{{ $cliente && $cliente->nome != '' ? $cliente->nome : old(nome) }}">

                <label class="label-cliente-edit ms-2" for="telefone">Telefone</label>
                <input class="input-create-user p-2" type="tel" name="celular" id="celular"
                    value="{{ $cliente && $cliente->celular != '' ? $cliente->celular : old(celular) }}">

                <label class="label-cliente-edit ms-2" for="nome">Celular</label>
                <input class="input-create-user p-2" type="text" name="ddd" id="ddd"
                    value="{{ $cliente && $cliente->ddd != '' ? $cliente->ddd : old(ddd) }}">

                <label class="label-cliente-edit ms-2" for="nome">Email</label>
                <input class="input-create-user p-2" type="email" name="email" id="email"
                    value="{{ $cliente && $cliente->email != '' ? $cliente->email : old(email) }}">


                <input class="input-clientes-edit ms-2 p-2 mt-3 me-3" type="submit" value="Atualizar">

            </form>



    </div>

</div>

@endsection
