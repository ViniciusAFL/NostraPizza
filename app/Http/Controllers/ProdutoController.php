<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Produto,TipoProduto};
use App\Http\Requests\StoreProdutoRequest;
use App\Http\Requests\UpdateProdutoRequest;


class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {                               //nome de acordo com os campos do banco de dados
        $produtos = Produto::orderBy('nome')->get();
        return view('produto.index')
        ->with(compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produto = null;
        return view('produto.novo')->with(compact('produto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProdutoRequest $request)
    {
        $validated = $request->validate([
            'nome' => 'required',
            'descricao' => 'required'
        ]);

        $produto = Produto::create($request->all());
        return redirect()
        ->route('produto.show',['id'=>$produto->id_produto]);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $produto = Produto::find($id);
        return view('produto.show')->with(compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $produto = Produto::find($id);
        return view('produto.form')->with(compact('produto'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $produto = Produto::find($id);
        $produto->update($request->all());
           return redirect()
         ->route('produto.index', ['id'=> $produto->id_produto])
           ->with('success','Atualizado com sucesso!');


    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Produto::find($id)->delete();
         return redirect()
             ->back()
             ->with('destroy', 'Excluído com sucesso!');
    }
}
