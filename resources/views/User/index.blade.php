@extends('layouts.base')

@section('conteudo')

<h1>Produtos</h1>

@if ($users->count(1))

<p>Erro</p>

@else

        @foreach ($users->get() as $user)

        <div class="card" style="width: 18rem; padding: 3%;">
            <div class="card-body">
              <h5 class="card-title">{{$user->nome}}</h5>
              {{-- <p class="card-text">{{$user->descricao}}</p> --}}
            <h6>{{$user->id_cargo}}</h6>
            </div>

            <a class="btn btn-warning" href="{{ route('user.edit', ['id'=>$user->id]) }}">Editar</a>
            <a class="btn btn-danger" href="{{ route('user.destroy', ['id'=>$user->id]) }}">Excluir</a>
            @endforeach
        </div>









        @include('layouts.rodape')
    @endsection
    @section('scripts')

