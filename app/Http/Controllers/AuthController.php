<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

use App\Http\Resources\UserResource;

use App\Models\Role;
use App\Models\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class AuthController
{
    /**
     * Registro usuario
     */
    public function register(RegisterRequest $request)
    {
        /**
         * Obtener rol USER por defecto
         */
        $defaultRole = Role::where(
            'slug',
            'USER'
        )->first();

        if (!$defaultRole) {

            return response()->json([

                'success' => false,

                'message' => 'Rol USER no encontrado'

            ], 500);
        }

        /**
         * Crear usuario
         */
        $user = User::create([

            'name' => $request->name,

            'email' => $request->email,

            'password' => Hash::make(
                $request->password
            ),

            'role_id' => $defaultRole->id
        ]);

        /**
         * Cargar relación role
         */
        $user->load('role');

        /**
         * Crear token Sanctum
         */
        $token = $user->createToken(
            'api-token'
        )->plainTextToken;

        return response()->json([

            'success' => true,

            'message' => 'Usuario registrado correctamente',

            'data' => [

                'user' => new UserResource($user),

                'token' => $token
            ]

        ], 201);
    }

    /**
     * Login usuario
     */
    public function login(LoginRequest $request)
    {
        /**
         * Buscar usuario por email o name
         */
        $user = User::with('role')

            ->when(
                $request->email,
                function ($query) use ($request) {

                    $query->where(
                        'email',
                        $request->email
                    );
                }
            )

            ->when(
                $request->name,
                function ($query) use ($request) {

                    $query->orWhere(
                        'name',
                        $request->name
                    );
                }
            )

            ->first();

        /**
         * Validar credenciales
         */
        if (
            !$user ||
            !Hash::check(
                $request->password,
                $user->password
            )
        ) {

            return response()->json([

                'success' => false,

                'message' => 'Credenciales incorrectas'

            ], 401);
        }

        /**
         * Revocar tokens anteriores
         */
        $user->tokens()->delete();

        /**
         * Crear nuevo token
         */
        $token = $user->createToken(
            'api-token'
        )->plainTextToken;

        return response()->json([

            'success' => true,

            'message' => 'Login correcto',

            'data' => [

                'user' => new UserResource($user),

                'token' => $token
            ]
        ]);
    }

    /**
     * Usuario autenticado
     */
    public function user(Request $request)
    {
        $user = $request->user()
            ->load('role');

        return response()->json([

            'success' => true,

            'data' => new UserResource($user)
        ]);
    }

    /**
     * Logout usuario
     */
    public function logout(Request $request)
    {
        $request->user()
            ->currentAccessToken()
            ->delete();

        return response()->json([

            'success' => true,

            'message' => 'Logout correcto'
        ]);
    }
}
