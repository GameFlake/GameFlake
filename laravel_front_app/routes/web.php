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


Route::view('/', 'home')
    ->name('home')
    ->middleware('auth');

Route::view('/coming_soon', 'coming_soon')
    ->name('coming_soon');

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

/*Route::post('/users', function () {
    return response('Hello World', 200)
                    ->header('Content-Type', 'text/plain');
});*/
/**
 * -------------------------
 *         TITULOS
 * -------------------------
 */

 
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

use App\Http\Controllers\TituloController;

Route::get('/catalogo', 'App\Http\Controllers\TituloQueryController@index');


// Ruta a la pagina simple
Route::view('team', "team");

