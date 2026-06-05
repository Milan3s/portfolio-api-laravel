<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;

/**
 * Rutas de Proyectos
 */
Route::prefix('proyectos')->group(function () {

    /**
     * Obtener todos los proyectos
     */
    Route::get('/', [
        ProjectController::class,
        'index'
    ]);

    /**
     * Obtener total de proyectos
     */
    Route::get('/total', [
        ProjectController::class,
        'count'
    ]);

    /**
     * Obtener proyectos por usuario
     */
    Route::get('/usuario/{usuarioId}', [
        ProjectController::class,
        'byUser'
    ]);

    /**
     * Obtener proyecto
     */
    Route::get('/{proyecto}', [
        ProjectController::class,
        'show'
    ]);

    /**
     * Rutas protegidas
     */
    Route::middleware('auth:sanctum')->group(function () {

        /**
         * Crear proyecto
         */
        Route::post('/', [
            ProjectController::class,
            'store'
        ]);

        /**
         * Actualizar proyecto
         */
        Route::put('/{proyecto}', [
            ProjectController::class,
            'update'
        ]);

        /**
         * Eliminar proyecto
         */
        Route::delete('/{proyecto}', [
            ProjectController::class,
            'destroy'
        ]);
    });
});
