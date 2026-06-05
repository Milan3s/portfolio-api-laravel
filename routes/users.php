<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

/**
 * Rutas de Usuarios
 */
Route::prefix('usuarios')->middleware('auth:sanctum')->group(function () {

    /**
     * Obtener todos los usuarios
     */
    Route::get('/', [
        UserController::class,
        'index'
    ]);

    /**
     * Obtener usuario por ID
     */
    Route::get('/{usuario}', [
        UserController::class,
        'show'
    ]);

    /**
     * Crear usuario
     */
    Route::post('/', [
        UserController::class,
        'store'
    ]);

    /**
     * Actualizar usuario
     */
    Route::put('/{usuario}', [
        UserController::class,
        'update'
    ]);

    /**
     * Actualización parcial
     */
    Route::patch('/{usuario}', [
        UserController::class,
        'update'
    ]);

    /**
     * Cambiar rol de usuario
     */
    Route::patch('/{usuario}/rol', [
        UserController::class,
        'changeRole'
    ]);

    /**
     * Eliminar usuario
     */
    Route::delete('/{usuario}', [
        UserController::class,
        'destroy'
    ]);
});
