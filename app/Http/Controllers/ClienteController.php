<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Cliente, ClienteEndereco, Endereco};
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\EnderecoController;



class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cliente = Cliente::where('id_cliente')->get();
        return view('Cliente.index')
         ->with(compact('cliente'));
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

        //  $validaded = $request->validate([
        //      'nome' => 'required',
        //      'celular' => 'required',
        //      'email' => 'required'
        //  ]);

        //  $cliente = Cliente::create($request->all());
        //  $endereco = Endereco::create($request->all());

        //   dd($request);

        //  $cliente->endereco()->attach($endereco->id);
        //  $cliente->cliente()->attach($cliente->id);

        //    $cliente->roles()->attach([
        //        1 => ['id_cliente' => $cliente],
        //        2 => ['id_endereco' => $endereco],
        //    ]);

        //  $cliente->endereco()->attach('id_endereco');
        //    $cliente->cliente()->attach('id_cliente');


         $dadosCliente = $request->only([
             'nome',
            'ddd',
             'celular',
             'email',
             // ... outros campos do cliente
         ]);

         $dadosEndereco = $request->only([
             'endereco',
             'numero',
             'complemento',
             'bairro',
             'cidade',
             'uf',
             'cep'
              //... outros campos do endereço
             ]);

         $cliente = Cliente::create($dadosCliente);

         $endereco = new Endereco($dadosEndereco);
         $endereco->save();

        //  $cliente->id_cliente;
        //  $endereco->id_endereco;
        //  $cliente = new ClienteEndereco();
        //  $cliente->endereco()->attach($endereco->id);
        //  $cliente->cliente()->attach($cliente->id);
        // $endereco = DB::insert($endereco, 'id_endereco')->get();
        $cliente = DB::insert('insert into clientes_enderecos (id_cliente, id_endereco, created_at, updated_at) values(?, ?, now(), now())',
        [$cliente->id_cliente, $endereco->id_endereco]);

        return redirect()->route('cliente.index')->with('success', 'DEU BOM MLK DOIDO');






    }




    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $cliente = Cliente::find($id);
        return view('cliente.show')->with(compact('cliente'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $cliente = Cliente::find($id);
        return view ('cliente.form')->with(compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $cliente = Cliente::find($id);
        $cliente->update($request->all());
            return redirect()->route('cliente.index', ['id'=>$cliente->id_cliente])
            ->with('success', 'Atualizado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Cliente::find($id)->delete();
        return redirect()
        ->back()
        ->with('destroy', 'Excluido Com Sucesso!');
    }
}
