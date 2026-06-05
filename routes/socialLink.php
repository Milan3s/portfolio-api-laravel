<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SocialLinkController;

/**
 * Rutas de Redes Sociales
 */
Route::prefix('redes-sociales')->group(function () {

    /**
     * Públicas
     */

    /**
     * Obtener todas las redes sociales
     */
    Route::get('/', [
        SocialLinkController::class,
        'index'
    ]);

    /**
     * Obtener red social por ID
     */
    Route::get('/{redSocial}', [
        SocialLinkController::class,
        'show'
    ]);

    /**
     * Protegidas
     */
    Route::middleware('auth:sanctum')->group(function () {

        /**
         * Crear red social
         */
        Route::post('/', [
            SocialLinkController::class,
            'store'
        ]);

        /**
         * Actualizar red social
         */
        Route::put('/{redSocial}', [
            SocialLinkController::class,
            'update'
        ]);

        /**
         * Actualización parcial
         */
        Route::patch('/{redSocial}', [
            SocialLinkController::class,
            'update'
        ]);

        /**
         * Eliminar red social
         */
        Route::delete('/{redSocial}', [
            SocialLinkController::class,
            'destroy'
        ]);
    });
});
