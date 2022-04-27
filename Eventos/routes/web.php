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

Route::get('/', function () {

    $nome = "Luis Henrique S F";
    $idade = 30;

    return view('welcome', ['nome' => $nome, 'idade' => $idade]);
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/produtos', function () {

    $busca = request('search');     /* request permite que o usuario faça uma busca */

    return view('produtos', ['busca' => $busca]);       /* a busca feita sera imprimida na tela do navegador */
});

Route::get('/produtos/{id}', function ($id) {      /* esta rota espera um id so usuario */
    return view('produto', ['id' => $id]);        /* enviando o id para view */
});

Route::get('/produtos_opcional/{id?}', function ($id = 1) {      /* o parametro é opcional se não for digitado nada pelo usuario, imprimira o produto pré adicionado 1 */
    return view('produto', ['id' => $id]);
});
