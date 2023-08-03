@extends('layouts.base')

@section('conteudo')
    <div class="container">
        <h1>Adicionar itens ao pedido</h1>
        <form action="{{ route('StorePedProd') }}" method="POST">
        <input type="hidden" name="id_user" value="{{$id_user = auth()->user()->id}}">

        @csrf
            <select name="" id="">
                @foreach ($produtos as $produto)
                <option value="{{ $produto->id_produto }}">
                    {{ $produto->nome }}
                </option>
                @endforeach
            </select>

            <select name="" id="">
                @foreach ($tamanhos as $tamanho)
                <option value="{{ $tamanho->id_produto_tamanho }}">
                    {{ $tamanho->preco}}
                </option>
                @endforeach
            </select>

            <input class="btn btn-warning" type="submit" value="Adicionar item">

     </form>



        <table class="table">
            <thead>
                <tr>
                    <th>
                        produto
                    </th>
                </tr>

            </thead>
            <tbody>
                @foreach ($pedidoprod->get() as $item)
                    <tr>
                        <td>
                            {!! $item->produto->produto->nome !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>



    </div>
@endsection
