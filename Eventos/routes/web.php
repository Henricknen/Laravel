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
Route::get('/eventos/criacao', [EventController::class, 'criacao']);
Route::get('/eventos/{id}', [EventController::class, 'show']);
Route::post('/eventos', [EventController::class, 'store']);
//Route::get('/eventos/produtos', [EventController::class, 'produtos']);
//Route::get('/eventos/contato', [EventController::class, 'contato']);

