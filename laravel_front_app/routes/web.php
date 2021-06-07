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
    ->name('create_user');

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
    ->middleware(['auth', 'can:consultarTitulo']);;
 
 /**
 * -------------------------
 *         OFERTAS
 * -------------------------
 */

Route::get('/ofertas', 'App\Http\Controllers\OfertaQueryController@index');
Route::delete('/ofertas/{id}', 'App\Http\Controllers\OfertaQueryController@destroy');
Route::post('/ofertas/update', 'App\Http\Controllers\OfertaQueryController@update');

use App\Http\Controllers\OfertaDeleteController;
//Route::get('/misofertas/{id}', [OfertaDeleteController::class, 'destroy']);
Route::resource('misofertas', OfertaDeleteController::class);
//Route::get('/misofertas/edit/{id}', [OfertaDeleteController::class,'edit']);


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

