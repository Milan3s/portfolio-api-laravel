<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

/**
 * Rutas de Inicio
 */
Route::prefix('inicio')->group(function () {

    /**
     * Públicas
     */

    /**
     * Obtener todos los registros de inicio
     */
    Route::get('/', [
        HomeController::class,
        'index'
    ]);

    /**
     * Obtener inicio por ID
     */
    Route::get('/{inicio}', [
        HomeController::class,
        'show'
    ]);

    /**
     * Protegidas ADMIN
     */
    Route::middleware([

        'auth:sanctum',
        'admin'

    ])->group(function () {

        /**
         * Crear inicio
         */
        Route::post('/', [
            HomeController::class,
            'store'
        ]);

        /**
         * Actualizar inicio
         */
        Route::put('/{inicio}', [
            HomeController::class,
            'update'
        ]);

        /**
         * Eliminar inicio
         */
        Route::delete('/{inicio}', [
            HomeController::class,
            'destroy'
        ]);
    });
});
