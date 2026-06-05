<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

/**
 * Rutas de Autenticación
 */
Route::prefix('autenticacion')->group(function () {

    /**
     * Públicas
     */

    /**
     * Registro de usuario
     */
    Route::post('/registro', [
        AuthController::class,
        'register'
    ]);

    /**
     * Inicio de sesión
     */
    Route::post('/iniciar-sesion', [
        AuthController::class,
        'login'
    ])->name('login');

    /**
     * Privadas
     */
    Route::middleware([
        'auth:sanctum'
    ])->group(function () {

        /**
         * Usuario autenticado
         */
        Route::get('/usuario', [
            AuthController::class,
            'user'
        ]);

        /**
         * Cerrar sesión
         */
        Route::post('/cerrar-sesion', [
            AuthController::class,
            'logout'
        ]);
    });
});
