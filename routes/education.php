<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EducationController;

/**
 * Rutas de Formación
 */
Route::prefix('formacion')->group(function () {

    /**
     * Públicas
     */

    /**
     * Obtener toda la formación
     */
    Route::get('/', [
        EducationController::class,
        'index'
    ]);

    /**
     * Obtener formación por ID
     */
    Route::get('/{formacion}', [
        EducationController::class,
        'show'
    ]);

    /**
     * Protegidas
     */
    Route::middleware('auth:sanctum')->group(function () {

        /**
         * Crear formación
         */
        Route::post('/', [
            EducationController::class,
            'store'
        ]);

        /**
         * Actualizar formación
         */
        Route::put('/{formacion}', [
            EducationController::class,
            'update'
        ]);

        /**
         * Eliminar formación
         */
        Route::delete('/{formacion}', [
            EducationController::class,
            'destroy'
        ]);
    });
});
