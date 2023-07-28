<?php
namespace App\Http\Controllers;
use App\Models\Produto;
use Illuminate\Http\Request;

class PesquisaController extends Controller
{

    public function index()
    {
        return view('ProdutoCliente.filtro');
    }

    public function filtrar(Request $request)
    {




        $termoPesquisa = $request->input('termo_pesquisa');



        // Realize a consulta no banco de dados usando o modelo e aplicando o filtro
        $resultados = Produto::where('nome', 'LIKE', "%$termoPesquisa%")->get();

        //dd($resultados->count());




        // Retorne os resultados para a view
        return view('produtocliente.filtro', compact('resultados'));
    }
}
?>
