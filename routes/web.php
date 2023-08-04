<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    CargoController,
    ClienteController,
    EnderecoController,
    PedidoController,
    PrecoPromocao,
    ProdutoController,
    ProdutoTamanhoController,
    ProfileController,
    ProdutoCliController,
    IndexSite,
    ContatoController,
    User,
    PesquisaController,
    GerenteController,
    UserController,
};
use Database\Factories\EnderecoFactory;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/')
    ->controller(IndexSite::class)->group(function () {
        Route::get('/', 'index')->name('index');
    });


Route::prefix('index')
    ->controller(IndexSite::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
    });

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/**
 * -----------------------------------
 * | Cargos
 * -----------------------------------
 */
Route::prefix('cargos')
    ->controller(CargoController::class)
    ->group(function () {
        Route::get('/', 'index')->name('cargo.index');
        Route::get('/novo', 'create')->name('cargo.create');
        Route::get('/{id}', 'show')->name('cargo.show');
        Route::get('/editar/{id}', 'edit')->name('cargo.edit');

        Route::post('/store', 'store')->name('cargo.store');
        Route::post('/update', 'update')->name('cargo.update');
        Route::post('/destroy/{id}', 'destroy')->name('cargo.destroy');
    });


/**
 * -----------------------------------
 * | Cliente
 * -----------------------------------
 */
Route::prefix('clientes')
    ->controller(ClienteController::class)
    ->group(function () {

        if (Gate::allows('indexcli', Auth::user())) {
            return view('Cliente.index');
        }

        Route::get('/', 'index')->name('cliente.index')->middleware('auth');

        Route::get('/novo/cadastrarcliente', 'create')->name('cliente.create');
        Route::get('show/{id_cliente}', 'show')->name('cliente.show');
        Route::get('/editar/{id_cliente}', 'edit')->name('cliente.edit');
        Route::post('/store', 'store')->name('cliente.store');
        Route::post('/update/{id_cliente}', 'update')->name('cliente.update');
        Route::delete('/destroy/{id_cliente}', 'destroy')->name('cliente.destroy');

        //endereços
        Route::get('/novo', 'createEndereco')->name('createEndereco');
        Route::get('/editEndereco/editar/{id_cliente}/{id_endereco}', 'editEndereco')->name('editEndereco');

        Route::post('/enderecoStore', 'enderecoStore')->name('enderecoStore');
        Route::post('/updateEndereco/{id_cliente}/{id_endereco}', 'updateEndereco')->name('updateEndereco');
        Route::delete('/destroy/{id_cliente}/{id_endereco}', 'destroyCliend')->name('destroyCliend');
    });

/**
 * -----------------------------------
 * | Endereco
 * -----------------------------------
 */
Route::prefix('enderecos')
    ->controller(EnderecoController::class)
    ->group(function () {
        Route::get('/', 'index')->name('endereco.index');
        Route::get('/novo', 'create')->name('endereco.create');
        Route::get('/{id}', 'show')->name('endereco.show');
        Route::get('/editar/{id}', 'edit')->name('endereco.edit');

        Route::post('/store', 'store')->name('endereco.store');
        Route::post('/update', 'update')->name('endereco.update');
        Route::post('/destroy', 'destroy')->name('endereco.destroy');
    });

/**
 * -----------------------------------
 * | Pedidos
 * -----------------------------------
 */
Route::prefix('pedidos')
    ->controller(PedidoController::class)
    ->group(function () {
        Route::get('/', 'index')->name('pedido.index');
        Route::get('/novo', 'create')->name('pedido.create')->middleware('auth');
        Route::get('/{id_pedido}', 'show')->name('pedido.show');
        Route::get('/editar/{id_pedido}', 'edit')->name('pedido.edit');

        Route::post('/store', 'store')->name('pedido.store');
        Route::post('/update/{id_pedido}', 'update')->name('pedido.update');
        Route::delete('/destroy/{id_pedido}', 'destroy')->name('pedido.destroy');

        //Pedidos Produtos
        Route::get('/adicionar/{id_pedido}', 'adicionar')->name('adicionar');
        Route::post('/StorePedProd', 'StorePedProd')->name('StorePedProd');

        Route::get('/buscar', 'buscar')->name('buscar');


    });

/**
 * -----------------------------------
 * | Produto
 * -----------------------------------
 */
Route::prefix('produtos')
    ->controller(ProdutoController::class)
    ->group(function () {
        Route::get('/', 'index')
            ->name('produto.index');
        Route::get('/novo', 'create')
            ->name('produto.create');
        Route::get('/{id}', 'show')
            ->name('produto.show');
        Route::get('/editar/{id}', 'edit')
            ->name('produto.edit');

        Route::get('/tamanho/{id_produto}', 'createTamanho')
            ->name('produto.createTamanho');
        Route::get('/tamanho/editar/{id}', 'editTamanho')
            ->name('produto.editTamanho');

        Route::post('/store', 'store')
            ->name('produto.store');
        Route::post('/update/{id}', 'update')
            ->name('produto.update');
        Route::post('/destroy/{id}', 'destroy')
            ->name('produto.destroy');

        Route::post('/tamanho/store/{id_produto}', 'storeTamanho')
            ->name('produto.storeTamanho');
        Route::post('/tamanho/update', 'updateTamanho')
            ->name('produto.updateTamanho');
        Route::post('/tamanho/destroy', 'destroyTamanho')
            ->name('produto.destroyTamanho');
    });



/**
 * -----------------------------------
 * | Tamanhos
 * -----------------------------------
 */
Route::prefix('tamanhos')
    ->controller(ProdutoTamanhoController::class)
    ->group(function () {
        Route::get('/', 'index')->name('tamanho.index');
        Route::get('/novo', 'create')->name('tamanho.create');
        Route::get('/{id}', 'show')->name('tamanho.show');
        Route::get('/editar/{id}', 'edit')->name('tamanho.edit');

        Route::post('/store', 'store')->name('tamanho.store');
        Route::post('/update/{id}', 'update')->name('tamanho.update');
        Route::delete('tamanho/destroy/{id}', 'destroy')->name('tamanho.destroy');
    });



/**
 * -----------------------------------
 * | Produto Cliente
 * -----------------------------------
 */
Route::prefix('ProdutoCliente')
    ->controller(ProdutoCliController::class)
    ->group(function () {
        Route::get('/', 'index')->name('ProdutoCliente.index');
        Route::get('/{id}', 'show')->name('ProdutoCliente.show');
    });


/**
 * -----------------------------------
 * | Promoções
 * -----------------------------------
 */
Route::prefix('Promocao')
    ->controller(PrecoPromocao::class)
    ->group(function () {
        Route::get('/', 'index')->name('PromocaoCli.index');
        Route::get('/{id}', 'show')->name('PromocaoCli.show');
    });

// CONTATO
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');
Route::post('contato-enviar', [ContatoController::class, 'send'])->name('contato.send');

//Pesquisa
Route::prefix('pesquisa')
    ->controller(PesquisaController::class)
    ->group(function () {
        Route::get('/pesquisa', 'filtrar')->name('pesquisa.filtrar');
    });

/**
 * -----------------------------------
 * | User
 * -----------------------------------
 */
Route::prefix('User')
    ->controller(UserController::class)
    ->group(function () {
        Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/store', 'store', [UserController::class, 'store'])->name('user.store');
        Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
        Route::put('/users/{id}', [UserController::class, 'update'])->name('user.update');
        Route::post('/users/excluir/', 'excluir')->name('user.excluir');
    });

//Gerente

Route::prefix('gerentes')
    ->controller(GerenteController::class)
    ->group(function () {
        Route::get('/', 'index')->name('gerente.index');
        Route::get('/novo', 'create')->name('gerente.create');
        Route::get('/{id}', 'show')->name('gerente.show');
        Route::get('/editar/{id}', 'edit')->name('gerente.edit');

        Route::post('/store', 'store')->name('gerente.store');
        Route::post('/update', 'update')->name('gerente.update');
        Route::delete('/destroy/{id}','destroy')->name('gerente.destroy');
    });

require __DIR__ . '/auth.php';
