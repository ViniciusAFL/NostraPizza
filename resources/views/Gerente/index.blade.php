@extends('layouts.base')
@section('content')
@include('layouts.menuAdm')

<div class="col-12 bg-create-user">

    <h1 class="funcionarios-color text-center">Gerentes</h1>
    <a href="{{ route('user.create')}}"> <button class="ms-3 btn-create-gerentes"> Cadastrar um Gerente</button></a>

    <table class="table table-striped table-hover mt-3">
        <thead>
            <tr>
                <th class="col-2">Ações</th>
                <th class="col-1">ID</th>
                <th class="col-1">Nome</th>
                <th class="col-1">Email</th>

                <th class="col-1">Criado em</th>
                <th class="col-1">Atualizado em</th>

            </tr>
        </thead>
        <tbody>
            @foreach($gerentes as $gerente)
            <tr>
                <td>
                    <a class="btn btn-primary" href="{{ route('user.edit', ['id'=>$gerente->id]) }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>

                    <a class="btn btn-danger" href="{{ route('user.excluir', ['id'=>$gerente->id_cargo]) }}">
                        <i class="fa-solid fa-trash-can"></i>
                    </a>
                </td>
                <td>
                    {{ $gerente->id_cargo}}
                </td>
                <td>
                    {{ $gerente->nome}}
                </td>

                <td>
                    {{ $gerente->email}}
                </td>

                <td>
                    {{ $gerente->created_at}}
                </td>
                <td>
                    {{ $gerente->updated_at}}
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    @include('layouts.rodape')
</div>

@endsection
@section('scripts')

@endsection
