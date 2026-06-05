<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServiceController;

/**
 * Rutas de Servicios
 */
Route::prefix('servicios')->group(function () {

    /**
     * Públicas
     */

    /**
     * Obtener todos los servicios
     */
    Route::get('/', [
        ServiceController::class,
        'index'
    ]);

    /**
     * Obtener servicio por ID
     */
    Route::get('/{servicio}', [
        ServiceController::class,
        'show'
    ]);

    /**
     * Protegidas
     */
    Route::middleware('auth:sanctum')->group(function () {

        /**
         * Crear servicio
         */
        Route::post('/', [
            ServiceController::class,
            'store'
        ]);

        /**
         * Actualizar servicio
         */
        Route::put('/{servicio}', [
            ServiceController::class,
            'update'
        ]);

        /**
         * Actualización parcial
         */
        Route::patch('/{servicio}', [
            ServiceController::class,
            'update'
        ]);

        /**
         * Eliminar servicio
         */
        Route::delete('/{servicio}', [
            ServiceController::class,
            'destroy'
        ]);
    });
});
