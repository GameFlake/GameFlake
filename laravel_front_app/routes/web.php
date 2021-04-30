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



Route::get('/oferta', function () {
    return view('ofertas');
});

Route::get('/prueba', 'App\Http\Controllers\OfertaQueryController@index');


// Ruta a la pagina simple
Route::view('team', "team");

