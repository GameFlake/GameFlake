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

// Importar controladores
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TituloQueryController;
use App\Http\Controllers\OfertaQueryController;
use App\Http\Controllers\OfertaDeleteController;


/**
 * -------------------------
 *      AUTENTICACION
 * -------------------------
 */

// Iniciar sesion
Route::view('/login', 'login')
    ->name('login')
    ->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);

// Cerrar sesion
Route::get('/logout', [AuthController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');

/**
 * -------------------------
 *         USUARIOS
 * -------------------------
 */

// Mostrar vista para registrar nuevo usuario
Route::get('/users/create', [UserController::class, 'create'])
    ->name('create_user')
    ->middleware('guest');

// Registrar nuevo usuario
Route::post('/users', [UserController::class, 'store'])
    ->name('store_user');

/**
 * -------------------------
 *         TITULOS
 * -------------------------
 */

Route::get('/catalogo', [TituloQueryController::class, 'index'])
    ->name('catalogo')
    ->middleware(['auth', 'can:consultarTitulo']);

Route::get('/catalogo/{id}', [TituloQueryController::class, 'showTitulo'])
    ->middleware(['auth', 'can:consultarTitulo', 'can:consultarJuego']);
 
 /**
 * -------------------------
 *         OFERTAS
 * -------------------------
 */

Route::get('/ofertas', [OfertaQueryController::class, 'index'])
    ->name('ofertas')
    ->middleware(['auth', 'can:consultarOferta']);

Route::post('/ofertas/{id}/update', [OfertaQueryController::class, 'update'])
    ->middleware(['auth', 'can:editarOferta']);

Route::delete('/ofertas/{id}', [OfertaQueryController::class, 'destroy'])
    ->middleware(['auth', 'can:eliminarOferta']);


 /**
 * -------------------------
 *         OTROS
 * -------------------------
 */

// Llevar al catalogo con ruta vacia
Route::get('/', [TituloQueryController::class, 'index'])
    ->middleware(['auth', 'can:consultarTitulo']);;

// Ruta a la pagina simple
Route::view('team', 'team')
    ->name('team');

