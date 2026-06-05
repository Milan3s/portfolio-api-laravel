<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController
{
    /**
     * Obtener todos los usuarios
     */
    public function index()
    {
        $users = User::with('role')
            ->select(
                'id',
                'name',
                'email',
                'role_id',
                'created_at'
            )
            ->orderBy('id', 'desc')
            ->get();

        return response()->json([

            'success' => true,

            'data' => $users
        ]);
    }

    /**
     * Obtener usuario por ID
     */
    public function show(string $id)
    {
        $user = User::with('role')
            ->find($id);

        if (!$user) {

            return response()->json([

                'success' => false,

                'message' => 'Usuario no encontrado'

            ], 404);
        }

        return response()->json([

            'success' => true,

            'data' => $user
        ]);
    }

    /**
     * Crear usuario
     */
    public function store(Request $request)
    {
        $validated = $request->validate([

            'name' => [
                'required',
                'string',
                'max:100',
                'unique:users,name'
            ],

            'email' => [
                'required',
                'email',
                'max:150',
                'unique:users,email'
            ],

            'password' => [
                'required',
                'string',
                'min:6'
            ],

            'role_id' => [
                'required',
                'exists:roles,id'
            ]
        ]);

        $user = User::create([

            'name' => $validated['name'],

            'email' => $validated['email'],

            'password' => Hash::make(
                $validated['password']
            ),

            'role_id' => $validated['role_id']
        ]);

        return response()->json([

            'success' => true,

            'message' => 'Usuario creado correctamente',

            'data' => $user->load('role')

        ], 201);
    }

    /**
     * Actualizar usuario
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);

        if (!$user) {

            return response()->json([

                'success' => false,

                'message' => 'Usuario no encontrado'

            ], 404);
        }

        $validated = $request->validate([

            'name' => [

                'sometimes',

                'string',

                'max:100',

                Rule::unique('users', 'name')
                    ->ignore($user->id)
            ],

            'email' => [

                'sometimes',

                'email',

                'max:150',

                Rule::unique('users', 'email')
                    ->ignore($user->id)
            ],

            'password' => [
                'nullable',
                'string',
                'min:6'
            ],

            'role_id' => [
                'sometimes',
                'exists:roles,id'
            ]
        ]);

        if (isset($validated['name'])) {
            $user->name = $validated['name'];
        }

        if (isset($validated['email'])) {
            $user->email = $validated['email'];
        }

        if (isset($validated['role_id'])) {
            $user->role_id = $validated['role_id'];
        }

        if (!empty($validated['password'])) {

            $user->password = Hash::make(
                $validated['password']
            );
        }

        $user->save();

        return response()->json([

            'success' => true,

            'message' => 'Usuario actualizado correctamente',

            'data' => $user->load('role')
        ]);
    }

    /**
     * Cambiar rol usuario
     */
    public function changeRole(
        Request $request,
        string $id
    ) {

        $validated = $request->validate([

            'role_id' => [
                'required',
                'exists:roles,id'
            ]
        ]);

        $user = User::find($id);

        if (!$user) {

            return response()->json([

                'success' => false,

                'message' => 'Usuario no encontrado'

            ], 404);
        }

        $user->role_id = $validated['role_id'];

        $user->save();

        return response()->json([

            'success' => true,

            'message' => 'Rol actualizado correctamente',

            'data' => $user->load('role')
        ]);
    }

    /**
     * Eliminar usuario
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        if (!$user) {

            return response()->json([

                'success' => false,

                'message' => 'Usuario no encontrado'

            ], 404);
        }

        $user->delete();

        return response()->json([

            'success' => true,

            'message' => 'Usuario eliminado correctamente'
        ]);
    }
}
