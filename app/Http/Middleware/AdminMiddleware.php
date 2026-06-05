<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Http\Request;

use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(
        Request $request,
        Closure $next
    ): Response {

        /**
         * TEST MIDDLEWARE
         */
        dd('ADMIN MIDDLEWARE FUNCIONANDO');

        /**
         * Obtener usuario autenticado
         */
        $user = $request->user();

        /**
         * Usuario no autenticado
         */
        if (!$user) {

            return response()->json([

                'success' => false,

                'message' => 'Unauthenticated'

            ], 401);
        }

        /**
         * Cargar relación role
         */
        $user->load('role');

        /**
         * Usuario no ADMIN
         */
        if (
            !$user->role ||
            $user->role->name !== 'ADMIN'
        ) {

            return response()->json([

                'success' => false,

                'message' => 'Unauthorized'

            ], 403);
        }

        /**
         * Continuar request
         */
        return $next($request);
    }
}
