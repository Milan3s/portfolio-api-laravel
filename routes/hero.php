<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HeroController;

/**
 * Rutas de Principal
 */
Route::prefix('principal')->group(function () {

    /**
     * Públicas
     */

    /**
     * Obtener todos los registros principales
     */
    Route::get('/', [
        HeroController::class,
        'index'
    ]);

    /**
     * Obtener registro principal por ID
     */
    Route::get('/{principal}', [
        HeroController::class,
        'show'
    ]);

    /**
     * Protegidas
     */
    Route::middleware('auth:sanctum')->group(function () {

        /**
         * Crear registro principal
         */
        Route::post('/', [
            HeroController::class,
            'store'
        ]);

        /**
         * Actualizar registro principal
         */
        Route::put('/{principal}', [
            HeroController::class,
            'update'
        ]);

        /**
         * Eliminar registro principal
         */
        Route::delete('/{principal}', [
            HeroController::class,
            'destroy'
        ]);
    });
});
