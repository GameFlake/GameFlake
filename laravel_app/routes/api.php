<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Importar controladores
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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
