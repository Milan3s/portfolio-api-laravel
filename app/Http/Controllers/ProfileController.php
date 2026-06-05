<?php

namespace App\Http\Controllers;

use App\Models\Profile;

use App\Http\Requests\ProfileRequest;

class ProfileController
{
    /**
     * Obtener todos los perfiles
     */
    public function index()
    {
        $profiles = Profile::with('user')
            ->orderBy('id', 'asc')
            ->get();

        return response()->json([

            'success' => true,

            'data' => $profiles
        ]);
    }

    /**
     * Obtener perfil por ID
     */
    public function show(string $id)
    {
        $profile = Profile::with('user')
            ->find($id);

        if (!$profile) {

            return response()->json([

                'success' => false,

                'message' => 'Perfil no encontrado'

            ], 404);
        }

        return response()->json([

            'success' => true,

            'data' => $profile
        ]);
    }

    /**
     * Crear perfil
     */
    public function store(ProfileRequest $request)
    {
        $validated = $request->validated();

        $profile = Profile::create($validated);

        return response()->json([

            'success' => true,

            'message' => 'Perfil creado correctamente',

            'data' => $profile

        ], 201);
    }

    /**
     * Actualizar perfil
     */
    public function update(
        ProfileRequest $request,
        string $id
    ) {

        $profile = Profile::find($id);

        if (!$profile) {

            return response()->json([

                'success' => false,

                'message' => 'Perfil no encontrado'

            ], 404);
        }

        $validated = $request->validated();

        $profile->update($validated);

        return response()->json([

            'success' => true,

            'message' => 'Perfil actualizado correctamente',

            'data' => $profile
        ]);
    }

    /**
     * Eliminar perfil
     */
    public function destroy(string $id)
    {
        $profile = Profile::find($id);

        if (!$profile) {

            return response()->json([

                'success' => false,

                'message' => 'Perfil no encontrado'

            ], 404);
        }

        $profile->delete();

        return response()->json([

            'success' => true,

            'message' => 'Perfil eliminado correctamente'
        ]);
    }
}
