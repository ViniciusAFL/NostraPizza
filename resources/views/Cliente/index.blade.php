@extends('layouts.base')

@section('conteudo')

<h1>TESTE</h1>
@if ($cliente == '')
    <a href="{{ route('cliente.create') }}">Cadastrar</a>
@endif
<a href="{{ route('cliente.create') }}">Cadastrar</a>

{{-- <a href="{{ route('cliente.show', ['id'=>$cliente->id_cliente]) }}"></a> --}}



 {{-- <a href="{{ route('cliente.edit', ['id'=>$cliente->id_cliente]) }}">Editar cadastro</a> --}}




</div>
@endsection
