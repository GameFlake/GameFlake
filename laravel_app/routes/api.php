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
//Route::apiResource("ofertas.destroy", [OfertaController::class,'destroy']);
//Route::apiget("misofertas/{id}", [MisOfertasController::class,'destroy']);
Route::post('/ofertas/{id}', ['as' => 'delete', 'uses' => 'App\Http\ControllersOfertaController@destroy']);

Route::post('/ofertas/update/{id}', ['as' => 'patch', 'uses' => 'App\Http\ControllersOfertaController@update']);

use App\Http\Controllers\MisOfertasController;
//Mando llamar a el controlador de ofertas (las ofertas que me hacen)
Route::apiResource("misofertas", MisOfertasController::class);

//Route::apiget("misofertas/{id}", [MisOfertasController::class,'destroy']);
Route::post('/misofertas/{id}', ['as' => 'delete', 'uses' => 'App\Http\ControllersMisOfertasController@destroy']);



use App\Http\Controllers\TituloController;

Route::apiResource("titulos", TituloController::class);

