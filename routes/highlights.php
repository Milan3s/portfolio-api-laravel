<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HeroHighlightController;

/**
 * Rutas de Destacados Principales
 */
Route::prefix('destacados-principales')->group(function () {

    /**
     * Públicas
     */

    /**
     * Obtener todos los destacados principales
     */
    Route::get('/', [
        HeroHighlightController::class,
        'index'
    ]);

    /**
     * Obtener destacado principal por ID
     */
    Route::get('/{destacadoPrincipal}', [
        HeroHighlightController::class,
        'show'
    ]);

    /**
     * Protegidas
     */
    Route::middleware('auth:sanctum')->group(function () {

        /**
         * Crear destacado principal
         */
        Route::post('/', [
            HeroHighlightController::class,
            'store'
        ]);

        /**
         * Actualizar destacado principal
         */
        Route::put('/{destacadoPrincipal}', [
            HeroHighlightController::class,
            'update'
        ]);

        /**
         * Eliminar destacado principal
         */
        Route::delete('/{destacadoPrincipal}', [
            HeroHighlightController::class,
            'destroy'
        ]);
    });
});
