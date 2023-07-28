@extends('layouts.base')
@section('conteudo')

@include('layouts.menu')
<div class="container indexcli">
    <link rel="stylesheet" href="{{ asset('nostra.css') }}">
    <h1 style="color: #FFF">Produto</h1>

    @if ($resultados->count() == 0)
        <p>Esse Produto não existe</p>
    @else
        @foreach ($resultados as $resultado)
            {{-- <h2>Fique a vontade {{$user->nome}}</h2> --}}
            <div class="container">
                <h2 style="color: #FFF">{{ $resultado->nome }}</h2>
            </div>
            <div class="col-12 col-xs-3 mt-5 ">
                <div class="card m-auto " style="width: 250px; height: 250px; margin:10px; padding: 10px;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $resultado->nome; ?></h5>
                        <p class="card-text" style="font-size: 15px; ">
                        </p>
                        <a href="{{ route('produto.show', ['id' => $resultado->id_produto]) }}"
                            class="btn btn-primary">Ver</a>

                        <a href="#" class="btn btn-success">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @endif
@endsection
@section('scripts')
@endsection
