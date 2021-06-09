<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Importar controladores
use App\Http\Controllers\OfertaController;
use App\Http\Controllers\MisOfertasController;
use App\Http\Controllers\TituloController;
use App\Http\Controllers\JuegoController;
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

/**
 * -------------------------
 *         OFERTAS
 * -------------------------
 */
Route::get('/ofertas', [OfertaController::class, "index"])
    ->middleware(['auth:sanctum', 'can:consultarOferta']);

Route::put('/ofertas/{id}/update', [OfertaController::class, "update"])
    ->middleware(['auth:sanctum', 'can:editarOferta']);

Route::delete('/ofertas/{id}', [OfertaController::class, "destroy"])
    ->middleware(['auth:sanctum', 'can:eliminarOferta']);

Route::get("/misofertas", [MisOfertasController::class, "index"])
    ->middleware(['auth:sanctum', 'can:consultarOferta']);


/**
 * -------------------------
 *     TITULOS & JUEGOS
 * -------------------------
 */
Route::get('/titulos', [TituloController::class, "index"])
    ->middleware(['auth:sanctum', 'can:consultarTitulo']);

Route::get('/titulos/{id}', [TituloController::class, "show"])
    ->middleware(['auth:sanctum', 'can:consultarTitulo']);

Route::get('/titulos/{id}/juegos', [JuegoController::class, "show"])
    ->middleware(['auth:sanctum', 'can:consultarJuego']);

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

