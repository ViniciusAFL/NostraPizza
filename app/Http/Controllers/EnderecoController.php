<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Endereco;
use App\Models\ClienteEndereco;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $endereco = Endereco::where('id_cliente')->get();
        return view('Cliente.index')
         ->with(compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $endereco = null;
        return view('Cliente.form')->with(compact('endereco'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validaded = $request->validate([
            'endereco' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'uf' => 'required',
            'cep' => 'required'
        ]);

        $endereco = Endereco::create($request->all());

        $endereco = Cliente::find('id');
        $endereco->roles()->attach('id');

    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $endereco = Endereco::find($id);
        return view('cliente.show')->with(compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $endereco = Endereco::find($id);
        return view ('cliente.form')->with(compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $endereco = Endereco::find($id);
        $endereco->update($request->all());
            return redirect()->route('cliente.index', ['id'=>$endereco->id_endereco])
            ->with('success', 'Atualizado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Endereco::find($id)->delete();
        return redirect()
        ->back()
        ->with('destroy', 'Excluido Com Sucesso!');
    }
}
