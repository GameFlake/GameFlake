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


/*
use App\Http\Controllers\APIController;
Route:: get('/oferta', [APIController::class , 'listOferta']);
*/

Route::get('/oferta', function () {
    return view('ofertas');
});


/*
//use App\Http\Controllers\Oferta;
Route::get('/ofertas', Oferta::class, 'listOferta');

/*
use App\Http\Controllers\Oferta;
Route:: resource('/oferta',Oferta::class );
*/
// Ruta a la pagina simple
Route::view('team', "team");

