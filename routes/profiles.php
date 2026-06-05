<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;

/**
 * Rutas de Perfil
 */
Route::prefix('perfiles')->group(function () {

    /**
     * Públicas
     */

    /**
     * Obtener todos los perfiles
     */
    Route::get('/', [
        ProfileController::class,
        'index'
    ]);

    /**
     * Obtener perfil por ID
     */
    Route::get('/{perfil}', [
        ProfileController::class,
        'show'
    ]);

    /**
     * Protegidas
     */
    Route::middleware('auth:sanctum')->group(function () {

        /**
         * Crear perfil
         */
        Route::post('/', [
            ProfileController::class,
            'store'
        ]);

        /**
         * Actualizar perfil
         */
        Route::put('/{perfil}', [
            ProfileController::class,
            'update'
        ]);

        /**
         * Eliminar perfil
         */
        Route::delete('/{perfil}', [
            ProfileController::class,
            'destroy'
        ]);
    });
});
