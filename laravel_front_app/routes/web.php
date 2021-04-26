<?php

use Illuminate\Support\Facades\Route;

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
