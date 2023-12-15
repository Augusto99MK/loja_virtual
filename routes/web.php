<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/produtos', function () {
    return redirect('/home');
});



Route::get('/home', [ProdutosController::class, 'index'])->name('produtos.index');
Route::get('/home', [ProdutosController::class, 'index'])->name('home');
Route::post('/produtos/store', [ProdutosController::class, 'store'])->name('produtos.store');
Route::get('/produtos/create', [ProdutosController::class, 'create'])->name('produtos.create');
Route::get('/produtos/{produto}/edit', [ProdutosController::class, 'edit'])->name('produtos.edit');
Route::delete('/produtos/{id}/destroy', [ProdutosController::class, 'destroy'])->name('produtos.destroy');
Route::put('/produtos/{produtos}', [ProdutosController::class, 'update'])->name('produtos.update');
Route::get('/produtos/{produtos}', [ProdutosController::class, 'show'])->name('produtos.show');
Route::get('/produtos/{produto}/edit', [ProdutosController::class, 'edit'])->name('produtos.edit');
