<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoleController;

/**
 * Rutas de Roles
 */
Route::prefix('roles')->middleware('auth:sanctum')->group(function () {

    /**
     * Obtener todos los roles
     */
    Route::get('/', [
        RoleController::class,
        'index'
    ]);

    /**
     * Obtener un rol por ID
     */
    Route::get('/{rol}', [
        RoleController::class,
        'show'
    ]);

    /**
     * Crear rol
     */
    Route::post('/', [
        RoleController::class,
        'store'
    ]);

    /**
     * Actualizar rol
     */
    Route::put('/{rol}', [
        RoleController::class,
        'update'
    ]);

    /**
     * Actualización parcial
     */
    Route::patch('/{rol}', [
        RoleController::class,
        'update'
    ]);

    /**
     * Eliminar rol
     */
    Route::delete('/{rol}', [
        RoleController::class,
        'destroy'
    ]);
});
