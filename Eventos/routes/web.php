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
use App\Http\Controllers\EventController;       /* importando o controller EventController */

Route::get('/', [EventController::class, 'index']);
Route::get('/eventos/criacao', [EventController::class, 'criacao'])->middleware('auth');
Route::get('/eventos/crud_user', [EventController::class, 'crud_user']);
Route::get('/eventos/{id}', [EventController::class, 'show']);
Route::post('/eventos', [EventController::class, 'store']);
Route::delete('/eventos/{id}', [EventController::class, 'destroy'])->middleware('auth');     // rota de deletar
Route::get('/eventos/edit/{id}', [EventController::class, 'edit'])->middleware('auth');
Route::put('/eventos/update/{id}', [EventController::class, 'update'])->middleware('auth');

//Route::get('/eventos/contato', [EventController::class, 'contato']);

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');  // o usuario tem que estar logado para acessar esta view

Route::post('/eventos/join/{id}', [EventController::class, 'joinEvent'])->middleware('auth');
