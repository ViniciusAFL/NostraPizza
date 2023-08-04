@extends('layouts.base')

@section('conteudo')
    <div class="container">
        <h1>Adicionar itens ao pedido</h1>

        <form action="{{ route('StorePedProd') }}" method="POST">
            @csrf

            <label for="id_produto_tamanho">Produto:</label>

            <select name="id_produto_tamanho" id="id_produto_tamanho">
                @foreach ($tamanhos as $tamanho)
                <option value="{{ $tamanho->id_produto_tamanho }}">{{ $tamanho->produto->id_produto . ' - ' . $tamanho->produto->nome }}</option>

                @endforeach
            </select>


             <label for="preco">Preço do produto:</label>
            <select name="preco" id="preco">
                @foreach ($tamanhos as $tamanho)
             <option value="{{ $tamanho->id_produto_tamanho }}">{{ $tamanho->produto->id_produto . ' - ' . $tamanho->preco}}</option>
                @endforeach
            </select>


            <label for="qtd">Quantidade</label>
            <input type="number" name="qtd" id="qtd">

            <input type="submit" value="Adicionar">

        </Form>





        <table class="table">
            <thead>
                <tr>
                    <th>
                        Ações
                    </th>

                    <th>
                        Tamanho
                    </th>

                    <th>
                        produto
                    </th>

                    <th>
                        Preço
                    </th>
                </tr>

            </thead>
            <tbody>
                @foreach ($pedidoprod->get() as $item)
                    <tr>
                        <td>
                            <a href="">
                                <i class="fa-solid fa-delete-left fa-lg" style="color: #fc1d1d;"></i>
                            </a>
                        </td>

                        <td>
                        </td>

                        <td>
                            {!! $item->produto->produto->nome !!}
                        </td>

                        <td>
                            {{$item->subtotal}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>



    </div>

@endsection
