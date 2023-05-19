<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    echo "<h1>Rota Raiz</h1>";
 });

Route::get('/bemvindo', function () {
    return view('bemvindo');
})->name('bemvindo');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');

Route::get('/laravel', function () {
    return view('welcome');
 });

 Route::get('/custom', function(){
    $msg = "mensagem do servidor back end *-*";
    $idade = 47;
    return view('custom', ['msg' => $msg, 'idade' => $idade]);
 });
