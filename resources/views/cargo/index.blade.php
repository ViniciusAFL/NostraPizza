@extends('layouts.base')
@section('content')
@include('layouts.menuAdm')

<div class="col-12 bg-create-user">

    <h1 class="funcionarios-color text-center">Funcionarios</h1>
    <a href="{{ route('user.create')}}"> <button class="ms-3 btn-create-gerentes"> Cadastrar um Funcionário</button></a>
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
            @foreach($cargos as $cargo)
            <tr>
                <td>
                    <a class="btn btn-primary" href="{{ route('user.edit', ['id'=>$cargo->id_cargo]) }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    {{-- <a class="btn btn-success" href="{{ route('cargo.show', ['id'=>$cargo->id_cargo]) }}">
                        <i class="fa-solid fa-eye"></i>
                    </a> --}}
                    <a class="btn btn-danger" href="{{ route('cargo.destroy', ['id'=>$cargo->id_cargo]) }}">
                        <i class="fa-solid fa-trash-can"></i>
                    </a>
                </td>
                <td>
                    {{ $cargo->id_cargo}}
                </td>
                <td>
                    {{ $cargo->nome }}
                </td>
                <td>
                    {{ $cargo->email}}
                </td>
                <td>
                    {{ $cargo->created_at}}
                </td>
                <td>
                    {{ $cargo->updated_at}}
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
