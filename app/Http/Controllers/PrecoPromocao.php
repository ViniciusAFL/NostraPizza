<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdutoTamanho;
use Illuminate\Support\Facades\DB;


class PrecoPromocao extends Controller
{
    public function index()
    {
        $promocao = DB::select('select * from produtos_tamanhos where preco_promocao not like 0.00');
        return view('PromocaoCli.index')
        ->with(compact('promocao'));
    }

    public function show(int $id)
    {
         $promocao = ProdutoTamanho::find($id);
        return view('PromocaoCli.show')->with(compact('promocao'));
    }

}
