<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

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
    return view('home');
})->name('home');

Route::get('/servicos', function () {
    return view('servicos');
})->name('servicos');

Route::get('/clientes', function () {
    return view('clientes');
})->name('clientes');

Route::get('/lojas', function () {
    return view('lojas');
})->name('lojas');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');

Route::get('/quemsomos', function () {
    return view('quemsomos');
})->name('quemsomos');

Route::post('/inserir', [ContatoController::class, 'store'])->name('inserir');

Route::get('/obg', function () {
    return view('obg');
})->name('obg');