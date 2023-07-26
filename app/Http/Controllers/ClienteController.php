<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Cliente, ClienteEndereco, Endereco};
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EnderecoController;
use Illuminate\Auth\Events\Validated;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

         $clientesEndereco = ClienteEndereco::class;
         $endereco = Endereco::class;

        $emailAutenticado = Auth::user()->email;

        $clientes = Cliente::where('email', $emailAutenticado)->first();

        if (!$clientes) {
            return redirect()->route('cliente.create')->with('warning', 'Cliente não encontrado.');
        }

        return view('Cliente.index') ->with(compact('clientes', 'endereco', 'clientesEndereco'));
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
         $dadosCliente = $request->only([
                'nome',
                'ddd',
                'celular',
                'email',
         ]);

         $dadosEndereco = $request->only([
             'endereco',
             'numero',
             'complemento',
             'bairro',
             'cidade',
             'uf',
             'cep'
             ]);

         $cliente = Cliente::create($dadosCliente);

         $endereco = new Endereco($dadosEndereco);
         $endereco->save();

        $cliente = DB::insert('insert into clientes_enderecos (id_cliente, id_endereco, created_at, updated_at) values(?, ?, now(), now())',
        [$cliente->id_cliente, $endereco->id_endereco]);

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

        // Verificar se o cliente foi encontrado
        if (!$cliente) {
            return redirect()->route('cliente.index')->with('error', 'Cliente não encontrado.');
        }

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
}
