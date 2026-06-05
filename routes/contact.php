<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;

/**
 * Rutas de Contacto
 */
Route::prefix('contacto')->group(function () {

    /**
     * Públicas
     */

    /**
     * Enviar mensaje de contacto
     */
    Route::post('/', [
        ContactController::class,
        'store'
    ]);

    /**
     * Protegidas
     */
    Route::middleware('auth:sanctum')->group(function () {

        /**
         * Obtener todos los contactos
         */
        Route::get('/', [
            ContactController::class,
            'index'
        ]);

        /**
         * Obtener contacto por ID
         */
        Route::get('/{contacto}', [
            ContactController::class,
            'show'
        ]);

        /**
         * Actualizar contacto
         */
        Route::put('/{contacto}', [
            ContactController::class,
            'update'
        ]);

        /**
         * Eliminar contacto
         */
        Route::delete('/{contacto}', [
            ContactController::class,
            'destroy'
        ]);
    });
});
