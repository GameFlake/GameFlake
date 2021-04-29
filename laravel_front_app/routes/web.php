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

Route::get('/catalogo', function () {
    return view('catalogo');
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

