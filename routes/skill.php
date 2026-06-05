<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SkillController;

/**
 * Rutas de Habilidades
 */
Route::prefix('habilidades')->group(function () {

    /**
     * Públicas
     */

    /**
     * Obtener todas las habilidades
     */
    Route::get('/', [
        SkillController::class,
        'index'
    ]);

    /**
     * Obtener habilidad por ID
     */
    Route::get('/{habilidad}', [
        SkillController::class,
        'show'
    ]);

    /**
     * Protegidas
     */
    Route::middleware('auth:sanctum')->group(function () {

        /**
         * Crear habilidad
         */
        Route::post('/', [
            SkillController::class,
            'store'
        ]);

        /**
         * Actualizar habilidad
         */
        Route::put('/{habilidad}', [
            SkillController::class,
            'update'
        ]);

        /**
         * Actualización parcial
         */
        Route::patch('/{habilidad}', [
            SkillController::class,
            'update'
        ]);

        /**
         * Eliminar habilidad
         */
        Route::delete('/{habilidad}', [
            SkillController::class,
            'destroy'
        ]);
    });
});
