<?php

use Illuminate\Support\Facades\Route;


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
Route::post('/login', [AuthenticationController::class, 'login']);

// Cerrar sesion
Route::get('/logout', [AuthenticationController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');
