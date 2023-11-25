<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return "Seja bem vindo ao curso";
});
Route::get('/contato', function () {
    return "contatos";
});

*/
Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class,'sobreNos'])->name('site.sobrenos');

Route::get('/contato', [\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
Route::post('/contato', [\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');

Route::get('/login', function () {
    return "login";
})->name('site.login');

Route::prefix('/app')->group(function(){

    Route::get('/clientes', function () {
        return "clientes";
    })->name('app.clientes');
    Route::get('/fornecedores',[\App\Http\Controllers\FornecedoresController::class,'index'])->name('app.fornecedores');//
    Route::get('/produtos', function () {
        return "produtos";
    })->name('app.produtos');

});
Route::fallback(function(){
    echo 'A página não foi encontrada. <a href="'.route('site.index').'">Clique aqui</a> para voltar para a página inicial';
});
/*
rota teste com variaveis com valores padrão e configuração de segurança
Route::get('/contato/{nome?}/{categoria_id?}',
function (string $nome = 'Desconhecido',
         int $categoria_id = 1) {
    echo "Estamos aqui: $nome - $categoria_id";
   }
)->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+');//Expressão regulares
*/
Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class,'teste'])->name('teste');



//Route::redirect('/rota2','/rota1');


