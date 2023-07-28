<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ProdutoCli,TipoProduto};
use App\Http\Requests\StoreProdutoRequest;
use App\Http\Requests\UpdateProdutoRequest;
use Illuminate\Pagination\Paginator;


class ProdutoCliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {                               //nome de acordo com os campos do banco de dados
        $produtos = ProdutoCli::orderBy('nome')->get();
        return view('produtocliente.index')
        ->with(compact('produtos'));
    }


    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $produto = ProdutoCli::find($id);
        return view('produtocliente.show')->with(compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
}
