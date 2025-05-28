<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produtosController;


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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('index');
});
Route::get('/ProdutosTodos',[produtosController::class,'produtosShow'])->middleware('auth');
Route::delete('/ExcluirProduto/{id}',[produtosController::class,'produtosDelete'])->middleware('auth');
Route::post('/ProdutosTodos/alterar-produto',[produtosController::class,'produtosEditar'])->middleware('auth');
Route::get('/show-produto/{id}',[produtosController::class,'show'])->middleware('auth');
Route::get('/obter-Subgrupos/{id}',[produtosController::class,'obterSubgrupPorIdGrupo'])->middleware('auth');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/', function () {
//         return view('index');
//     })->name('index');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
