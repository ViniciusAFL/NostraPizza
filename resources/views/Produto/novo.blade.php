@extends('layouts.base')

@section('conteudo')
<form action="{{ route('produto.store') }}" method="post">
    @csrf
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" required>
    <label for="nome">descrição</label>
    <input type="text" name="descricao" id="descricao" required>
    <input type="submit" value="Criar">
</form>
@endsection

<h1>TESTE</h1>


