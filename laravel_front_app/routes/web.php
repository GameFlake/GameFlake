<?php

use Illuminate\Support\Facades\Route;

// Importar controladores
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
});

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
