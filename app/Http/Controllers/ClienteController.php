<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Cliente, ClienteEndereco, Endereco};
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EnderecoController;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Pagination\Paginator;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cliente = Cliente::all();
        return view('Cliente.index')->with(compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cliente = null;
        return view('Cliente.form')->with(compact('cliente'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $cliente = Cliente::create($request->all());
        return redirect()->route('cliente.index')->with('success');

    }




    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $cliente = Cliente::find($id);
        $enderecos = Endereco::all();
        $clientesEndereco = ClienteEndereco::all();

        return view('Cliente.show')->with(compact('cliente', 'enderecos', 'clientesEndereco'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $cliente = Cliente::find($id);
        return view ('cliente.update')->with(compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $cliente = Cliente::find($id);
        $cliente->update($request->all());

         return redirect()->route('cliente.show', ['id'=>$cliente->id_cliente])
         ->with('success', 'Atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Cliente::find($id)->delete();
        return redirect()->back()->with('danger', 'Removido Com sucesso!');

    }


    /**
     * |||||||||||||||||||||||||||||||||||||||||||||||
     * |                ENDEREÇOS                    |
     * |||||||||||||||||||||||||||||||||||||||||||||||
     */

    public function createEndereco(Request $request)
    {
         $cliente = Cliente::find('id_cliente');
        $enderecos = Endereco::class;
        $clientesEndereco = ClienteEndereco::class;

        $id_cliente = $request->input('id_cliente');

        // return view('Cliente.FormEndereco')->with(compact('cliente', 'enderecos','clientesEndereco'));

        return view('Cliente.FormEndereco', ['id_cliente' => $id_cliente]);
    }


    public function enderecoStore(Request $request)  {
        $enderecos = Endereco::create([
            // 'id_cliente' => $id_cliente,
            'endereco' => $request->endereco,
            'numero' => $request->numero,
            'complemento' => $request->complemento,
            'bairro'=> $request->bairro,
            'cidade'=> $request->cidade,
            'uf'=> $request->uf,
            'cep'=> $request->cep,
        ]);

        $clientesend = ClienteEndereco::class;

        $clientesend = $request->only([
            'id_cliente',
            'id_endereco',
        ]);

        $id_cliente = $request->input('id_cliente');

        DB::table('clientes_enderecos')->insert([
            'id_cliente' => $id_cliente,
            'id_endereco' => $enderecos->id_endereco,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('cliente.index')->with('successo', 'cadastrado com sucesso.');
    }

    public function EnderecoEdit(int $id)
    {
        $clientesend = ClienteEndereco::find($id);
        $endereco = Endereco::class;
        // $enderecos = $clientesend->endereco();

        return view ('Cliente.updateEndereco')->with(compact('clientesend', 'endereco'));


    }







}
