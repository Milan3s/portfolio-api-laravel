<?php

namespace App\Http\Controllers;

use App\Models\Role;

use Illuminate\Http\Request;

class RoleController
{
    /**
     * Obtener todos los roles
     */
    public function index()
    {
        $roles = Role::orderBy('id', 'desc')
            ->get();

        return response()->json([

            'success' => true,

            'data' => $roles
        ]);
    }

    /**
     * Obtener rol por ID
     */
    public function show(string $id)
    {
        $role = Role::find($id);

        if (!$role) {

            return response()->json([

                'success' => false,

                'message' => 'Rol no encontrado'

            ], 404);
        }

        return response()->json([

            'success' => true,

            'data' => $role
        ]);
    }

    /**
     * Crear rol
     */
    public function store(Request $request)
    {
        $validated = $request->validate([

            'name' => [
                'required',
                'string',
                'max:100',
                'unique:roles,name'
            ],

            'slug' => [
                'required',
                'string',
                'max:100',
                'unique:roles,slug'
            ],

            'description' => [
                'nullable',
                'string'
            ],

            'is_active' => [
                'required',
                'boolean'
            ]
        ]);

        $role = Role::create($validated);

        return response()->json([

            'success' => true,

            'message' => 'Rol creado correctamente',

            'data' => $role

        ], 201);
    }

    /**
     * Actualizar rol
     */
    public function update(
        Request $request,
        string $id
    ) {

        $role = Role::find($id);

        if (!$role) {

            return response()->json([

                'success' => false,

                'message' => 'Rol no encontrado'

            ], 404);
        }

        $validated = $request->validate([

            'name' => [
                'sometimes',
                'string',
                'max:100',
                'unique:roles,name,' . $role->id
            ],

            'slug' => [
                'sometimes',
                'string',
                'max:100',
                'unique:roles,slug,' . $role->id
            ],

            'description' => [
                'nullable',
                'string'
            ],

            'is_active' => [
                'sometimes',
                'boolean'
            ]
        ]);

        $role->update($validated);

        return response()->json([

            'success' => true,

            'message' => 'Rol actualizado correctamente',

            'data' => $role
        ]);
    }

    /**
     * Eliminar rol
     */
    public function destroy(string $id)
    {
        $role = Role::find($id);

        if (!$role) {

            return response()->json([

                'success' => false,

                'message' => 'Rol no encontrado'

            ], 404);
        }

        $role->delete();

        return response()->json([

            'success' => true,

            'message' => 'Rol eliminado correctamente'
        ]);
    }
}
