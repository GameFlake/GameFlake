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
    return view('welcome');
});

/*
use App\Http\Controllers\APIController;
Route:: get('/oferta', [APIController::class , 'listOferta']);
*/

Route::get('/oferta', function () {
    return view('ofertas');
});

use App\Http\Controllers\TituloController;

Route::get('/catalogo', 'App\Http\Controllers\TituloQueryController@index');
Route::get('/catalogo/{id}', 'App\Http\Controllers\TituloQueryController@showTitulo');

/*
//use App\Http\Controllers\Oferta;
Route::get('/ofertas', Oferta::class, 'listOferta');

/*
use App\Http\Controllers\Oferta;
Route:: resource('/oferta',Oferta::class );
*/
// Ruta a la pagina simple
Route::view('team', "team");

