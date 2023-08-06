@extends('layouts.base')
@section('conteudo')

    @include('layouts.menu')
    <link rel="stylesheet" href="{{ asset('nostra.css') }}">
    <h1>Produto {{ $produto->nome }}</h1>

    <div class="container">
        <table class="table">
            <tr>
                <thead>
                    <th>id_produto</th>
                    <th>nome</th>
                    <th>descricao</th>
                    <th>foto</th>
                </thead>
            </tr>

            <tbody>
                <tr>
                    <td>{{ $produto->id_produto }}</td>
                    <td>{{ $produto->nome }} </td>
                    <td>{{ $produto->descricao }}</td>
                    <td>
                        <img src="{{ url('storage/fotos/' . $produto->foto) }}" lass="img-thumbnail"
                                        width="250">
                    </td>
                </tr>
            </tbody>

        </table>





    </div>
@endsection
@section('scripts')
@endsection
