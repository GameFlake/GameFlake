<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Http\Controllers\OfertaController;

//Mando llamar a el controlador de ofertas (las ofertas que me hacen)
Route::apiResource("ofertas", OfertaController::class);


use App\Http\Controllers\MisOfertasController;
//Mando llamar a el controlador de ofertas (las ofertas que me hacen)
Route::apiResource("misofertas", MisOfertasController::class);

use App\Http\Controllers\TituloController;

Route::apiResource("titulos", TituloController::class);

