@extends('layouts.base')

@section('conteudo')
    <div class="container">
        <h1>Adicionar itens ao pedido</h1>

        <a href="{{ route('pedido.show', ['id_pedido'=>$pedidos->id_pedido]) }}">Finalizar Pedido</a>

        <form action="{{ route('StorePedProd') }}" method="POST">
            @csrf

             {{-- @foreach ($tamanhos as $ta)
                    @dd($ta->produto->nome, $ta->produto->id_produto = 3, $ta->id_tamanho,  $ta->produto->tamanhos->tamanho->tamanho)
            @endforeach --}}


            <label for="id_produto_tamanho">Produto:</label>

            <select name="id_produto_tamanho" id="id_produto_tamanho">
                @foreach ($tamanhos as $tamanho)
                <option value="{{ $tamanho->id_produto_tamanho }}">{{ $tamanho->produto->id_produto . ' - ' . $tamanho->produto->nome. ' - Tamanho: '.$tamanho->produto->tamanhos->tamanho->tamanho }}</option>
                @endforeach
            </select>


             <label for="preco">Preço do produto:</label>
            <select name="preco" id="preco">
                @foreach ($tamanhos as $tamanho)

                <option value="{{ $tamanho->preco }}">{{ $tamanho->produto->id_produto . ' - ' . $tamanho->preco. ' - ' .$tamanho->produto->tamanhos->tamanho->tamanho}}</option>
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

                    {{-- <th>
                        Tamanho
                    </th> --}}

                    <th>
                        produto
                    </th>

                    <th>
                        Quantidade
                    </th>

                    <th>
                        Preço
                    </th>
                </tr>

            </thead>
            <tbody>
                @foreach ($pedidoprod->get() as $item)
                    <tr>
                        {{-- @dd($item->id_pedido) --}}

                        <td>
                            <form action="{{ route('Deleteitem', ['id_pedido'=>$item->id_pedido,
                            'id_produto_tamanho' =>$item->id_produto_tamanho
                            ]) }}" method="post">
                                @csrf
                                @method('delete')
                             <button class="btn btn-dark" onclick=" return confirm('tem certeza que deseja excluir?')">EXCLOI
                                {{-- <i class="fa-solid fa-delete-left fa-lg" style="color: #fc1d1d;"></i> --}}
                            </button>
                        </form>
                        </td>

                        <td>
                            {{ $item->tamanho }}
                        </td>

                        <td>
                            {!! $item->produto->produto->nome !!}
                        </td>

                        <td>
                            {{$item->qtd}}
                        </td>

                        <td>
                            R${{$item->subtotal}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>



    </div>

@endsection
