<?php
use App\Http\Controllers\ConvidadoController;
use App\Http\Controllers\ConfirmacaoController;
use App\Http\Controllers\DiaconoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/diaconos',[DiaconoController::class, 'provisao']);
Route::get('/situacao',[DiaconoController::class, 'situacao']);
Route::get('/ordenacao',[DiaconoController::class, 'ordenacao']);
Route::get('/setor',[DiaconoController::class, 'setor']);
Route::get('/vicariato',[DiaconoController::class, 'vicariato']);

Route::get('/convidado',[ConvidadoController::class, 'index']);
Route::get('/confirmar',[ConvidadoController::class, 'update']);
Route::get('/acesso',[ConvidadoController::class, 'validarAcesso']);
Route::get('/adultos',[ConvidadoController::class, 'retornaAdultos']);
Route::get('/criancas',[ConvidadoController::class, 'retornaCriancas']);
Route::get('/apenas',[ConvidadoController::class, 'apenasPrincipal']);
Route::get('/cancelar',[ConvidadoController::class, 'cancelarTodos']);
Route::get('/modificar',[ConvidadoController::class, 'alterarQuantidade']);


Route::get('/situacao',[ConfirmacaoController::class, 'retornaConfirmacao']);
Route::get('/situacaoconvite',[ConfirmacaoController::class, 'alterarSituacao']);




