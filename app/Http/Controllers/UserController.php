<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Método para exibir o formulário de criação de usuário
    public function create()
    {
        return view('user.create');
    }

    // Método para salvar o novo usuário no banco de dados
    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'id_cargo' => 'required|int',

        ]);

        User::create($data);

        return redirect()->route('user.create')->with('success', 'Usuário cadastrado com sucesso!');
    }

    // Método para exibir o formulário de edição de usuário
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    // Método para atualizar o usuário no banco de dados
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $data = $request->validate([
            'nome' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6',
            'id_cargo' => 'required|int',

        ]);

        $user->update($data);

        return redirect()->route('user.edit', $id)
        ->with('success', 'Usuário atualizado com sucesso!');
    }
    public function excluir(User $user)
    {
        // Use o método "delete" no modelo para removê-lo do banco de dados

        $user->delete();

        // Redirecione para a página adequada após a exclusão
        return redirect()->route('gerente.index')->with('success', 'Usuario excluído com sucesso!');
    }
}

?>
