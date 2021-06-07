<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Importar controladores
use App\Http\Controllers\OfertaController;
use App\Http\Controllers\MisOfertasController;
use App\Http\Controllers\TituloController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;


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



//Mando llamar a el controlador de ofertas (las ofertas que me hacen)
Route::apiResource("ofertas", OfertaController::class);

//Recibir el Id e ir al controlador para eliminar la oferta
Route::post('/ofertas/{id}', ['as' => 'delete', 'uses' => 'App\Http\ControllersOfertaController@destroy']);

//Recibir el id e ir al controlador para actualizar la oferta 
Route::put('/ofertas/update', ['as' => 'put', 'uses' => 'App\Http\ControllersOfertaController@update']);


//Mando llamar a el controlador de ofertas (las ofertas que hago)
Route::apiResource("misofertas", MisOfertasController::class);
//Recibir el Id e ir al controlador para eliminar la oferta
Route::post('/misofertas/{id}', ['as' => 'delete', 'uses' => 'App\Http\ControllersMisOfertasController@destroy']);





Route::apiResource("titulos", TituloController::class);



/**
 * -------------------------
 *      AUTENTICACION
 * -------------------------
 */

// Obtener token con las credenciales del usuario
Route::post('/tokens/create', [AuthController::class, "createToken"]);

// Elimina un token emitido anteriormente
Route::middleware('auth:sanctum')
    ->post('/tokens/revoke', [AuthController::class, "revokeToken"]);
    
/**
 * -------------------------
 *         USUARIOS
 * -------------------------
 */
// Obtener datos del usuario
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Registrar nuevo usuario
Route::post('/users/store', [UserController::class, 'store'])
    ->name('store_user');


// Muestra un error a las peticiones sin token
Route::get('/unauthorized', [AuthController::class, "showAuthError"])->name('unauthorized');

