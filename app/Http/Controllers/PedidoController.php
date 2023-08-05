<?php

namespace App\Http\Controllers;

use App\Models\{
    TipoPedido,
    Cliente,
    ClienteEndereco,
    Status,
    TipoPagamento,
    Pedido,
    User,
    PedidoProduto,
    Produto,
    ProdutoTamanho,
    tamanho,
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedido::all();

        return view('pedidos.index')->with(compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pedidos = null;
        $tipo_pedido = TipoPedido::all();
        $user = User::all();
        $status = Status::all();
        $tipo_pagamento = TipoPagamento::all();
        $Clientes = Cliente::class;
        return view('pedidos.pedidoCreate')->with(compact('pedidos', 'tipo_pedido', 'status', 'tipo_pagamento'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pedido = Pedido::create($request->all());

        $id_cliente = $request->input('id_cliente');
        $id_cliente_endereco = $request->input('id_cliente_endereco');
        $id_user = $request->input('id_user');

        return redirect()->route('pedido.show', ['id_pedido' => $pedido->id_pedido])->with('success');

    }

    /**
     * Display the specified resource.
     */
    public function show(int $id_pedido)
    {
        $pedidos = Pedido::Find($id_pedido);
        return view('pedidos.pedidoshow')->with(compact('pedidos'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id_pedido)
    {
        $pedidos = Pedido::find($id_pedido);
        return view('pedidos.update')->with(compact('pedidos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id_pedido)
    {
        $pedidos = Pedido::find($id_pedido);
        $pedidos->update($request->all());

         return redirect()->route('pedido.show', ['id_pedido'=> $pedidos->id_pedido])
         ->with('success', 'Atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id_pedido)
    {
        Pedido::find($id_pedido)->delete();
        return redirect()->back()->with('danger', 'Removido Com sucesso!');
    }


    /**
     * |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
     *                           PEDIDOS PRODUTOS
     * |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
     */


    public function Adicionar(int $id_pedido)
    {
        $produtos = Produto::all();
        $pedidos = Pedido::find($id_pedido);
        $tamanhos = ProdutoTamanho::all();
        $pedidoprod  = PedidoProduto::with([
            'produto',
            'produto.produto',
            'usuario',
            'pedido'
            ])
            ->where('id_pedido', $id_pedido);
            session(['id_pedido' => $id_pedido]);
         return view('pedidos.Adicionar')->with(compact('pedidoprod','produtos', 'tamanhos', 'pedidos'));
    }

    public function StorePedProd(Request $request)
    {
        $id_pedido = session('id_pedido');
        $preco = $request->input('preco');
        $qtd = $request->input('qtd');
        $idProdutoTamanho = $request->input('id_produto_tamanho');
        $subtotal = $preco * $qtd;

        $pedidoprod = PedidoProduto::create([
        'id_user' => Auth::user()->id,
        'id_pedido' => $id_pedido,
        'id_produto_tamanho' => $idProdutoTamanho,
        'preco' => $preco,
        'qtd' => $request->input('qtd'),
        'subtotal' => $subtotal,
        ]);

        $this->Finalizar($id_pedido);
        $this->updateTotalPedido();

        return redirect()->back()->with('success', 'Produto Adicionado!');

    }



    public function Finalizar(int $id_pedido)
    {
        $id_pedido = session('id_pedido');

        $itensPedido = PedidoProduto::where('id_pedido', $id_pedido)->get();

        $totalPedido = 0;
        foreach ($itensPedido as $item) {
            if (!$item->trashed()) {
                $subtotal = $item->preco * $item->qtd;
                $totalPedido += $subtotal;
            }

        }

        $pedido = Pedido::find($id_pedido);
        $pedido->total = $totalPedido;
        $pedido->save();
    }


    public function Deleteitem()
    {

        $id_pedido = session('id_pedido');
        $pedidos = Pedido::class;

        $pedidoprod = PedidoProduto::where('id_pedido', $id_pedido)->first();

        $pedidoprod->delete();

        $this->updateTotalPedido();

        return redirect()->back()->with('danger', 'Removido com sucesso!');

    }


    public function updateTotalPedido()
    {
    $id_pedido = session('id_pedido');

    $itensPedido = PedidoProduto::where('id_pedido', $id_pedido)->get();

    $totalPedido = 0;
    foreach ($itensPedido as $item) {
        $subtotal = $item->preco * $item->qtd;
        $totalPedido += $subtotal;
    }

    $pedido = Pedido::find($id_pedido);
    $pedido->total = $totalPedido;
    $pedido->save();
    }


}
