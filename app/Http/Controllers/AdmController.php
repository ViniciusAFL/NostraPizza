<?php

// namespace App\Http\Controllers;



// use illuminate\Http\Request;
// use App\Models\{Cliente,User, ClienteEndereco, Endereco};
// use Illuminate\Support\Facades\DB;
// //use App\Http\Controllers\Adm;





// class AdmController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      */

//      public function index()
//      {
//         //id 3 pq era o funcionario lá na tabela de cargo
//         $cargos = DB::select('select * from users where id_cargo = 3');



//         return view('cargo.index')
//             ->with(compact('cargos'));
//      }

//     //  public function gerente()
//     //  {
//     //     //id 3 pq era o funcionario lá na tabela de cargo
//     //     $cargos = DB::select('select * from users where id_cargo = 2');



//     //     return view('cargo.gerente')
//     //         ->with(compact('cargos'));
//     //  }
// public function show(int $id)
// {
//     $cliente = Cliente::find($id);
//     return view('adm.show')->with(compact('cliente'));
// }

// // public function mostrar()
// // {
// //     $users = User::orderby('nome')->get();
// //     return view('user.index')->with(compact('users'));
// // }

// public function create()
//     {
//         $funcionario = null;
//         return view('adm.form')->with(compact('adm'));
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//          $dadosFuncionario = $request->only([
//                 'nome',
//                 'email',
//                 'senha',

//          ]);


//          $funcionario = AdmController::create($dadosFuncionario);

//         $funcionario = DB::insert('insert into users (id, nome, email, id_cargo, email_verified_at, password, updated_at) values(?, ?, ?, 2, now(), ?, now())',
//         [$funcionario->id]);

//         return redirect()->route('adm.index')->with('success');


//             }

//             // public function destroy(int $id)
//             // {
//             //     Cliente::find($id)->delete();
//             //     return redirect()->back()->with('danger', 'Removido Com sucesso!');

//             // }








// }
// ?>
