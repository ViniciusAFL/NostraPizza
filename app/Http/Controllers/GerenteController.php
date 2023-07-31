<?php

/**
 * |----------------------------------------
 * | @author Thomas Melo
 * | 27-06-2023
 * |----------------------------------------
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\{
    Cargo,
    User
};
use Ramsey\Uuid\Type\Integer;

class GerenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $gerentes = DB::select('select * from users where id_cargo = 2');



        return view('gerente.index')
            ->with(compact('gerentes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $gerente = null;
        return view('gerente.form')
            ->with(compact('gerente'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $data = $request->validate([
    //         'nome' => 'required|string',
    //         'email' => 'required|email|unique:users,email',
    //         'password' => 'required|min:6',
    //         'id_cargo' => 'required|int',

    //     ]);

    //     User::create($data);

    //     return redirect()->route('user.create')->with('success', 'Usuário cadastrado com sucesso!');}

    /**
     * Display the specified resource.
     */
    // public function show(int $id)
    // {
    //     $cargo = Cargo::find($id);
    //     return view('cargo.show')
    //         ->with(compact('cargo'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {


        // DB::insert('insert into users(id_cargo) value(?)');
        $gerente = Cargo::find($id);
        $gerente->update($request->all());
            return redirect()
            ->route('gerente.index')
            ->with('success','Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Cargo::find($id)->delete();
        return redirect()
            ->back()
            ->with('destroy','Excluído com sucesso!');
    }
}
