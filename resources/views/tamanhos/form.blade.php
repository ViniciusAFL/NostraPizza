@extends('layouts.base')

@section('conteudo')


<form action="{{ route('tamanho.store') }}" method="post">
    @csrf
    <div class="row-md-2">
        <label for="id_produto">Digite o Id do produto que você Deseja editar:</label>
        <input type="text" name="id_produto" id="id_produto" required>
    </div>

    <div class="row-md-2">
        <label for="id_tamanho">Digite o Id do tamanho: 1 para não definido.</label>
        <input type="text" name="id_tamanho" id="id_tamanho" required>
    </div>

    <div class="row-md-2">
        <label for="preco">Digite o preço</label>
        <input type="text" name="preco" id="preco">
    </div>

    <div class="row-md-2">
        <label for="preco promocional">Digite o preço promocional</label>
        <input type="text" name="preco_promocao" id="preco_promocao" required>
    </div>

    <div class="row-md-2">
        <label for="preco">Digite alguma obervação</label>
        <input type="text" name="observacoes" id="observacoes">
    </div>

    <div class="row-md-2">
        <input class="btn btn-warning" type="submit" value="Criar">
    </div>
</form>


@endsection

