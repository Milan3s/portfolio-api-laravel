<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExperienceController;

/**
 * Rutas de Experiencia
 */
Route::prefix('experiencia')->group(function () {

    /**
     * Públicas
     */

    /**
     * Obtener toda la experiencia
     */
    Route::get('/', [
        ExperienceController::class,
        'index'
    ]);

    /**
     * Obtener experiencia por ID
     */
    Route::get('/{experiencia}', [
        ExperienceController::class,
        'show'
    ]);

    /**
     * Protegidas
     */
    Route::middleware('auth:sanctum')->group(function () {

        /**
         * Crear experiencia
         */
        Route::post('/', [
            ExperienceController::class,
            'store'
        ]);

        /**
         * Actualizar experiencia
         */
        Route::put('/{experiencia}', [
            ExperienceController::class,
            'update'
        ]);

        /**
         * Eliminar experiencia
         */
        Route::delete('/{experiencia}', [
            ExperienceController::class,
            'destroy'
        ]);
    });
});
