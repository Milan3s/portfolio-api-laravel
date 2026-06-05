<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeRequest;

use App\Models\Home;

class HomeController
{
    /**
     * Obtener todos los registros Home
     */
    public function index()
    {
        $home = Home::with('user')
            ->latest('id')
            ->get();

        return response()->json([
            'success' => true,
            'data' => $home
        ]);
    }

    /**
     * Obtener Home por ID
     */
    public function show(int $id)
    {
        $home = Home::with('user')
            ->find($id);

        if (!$home) {

            return response()->json([
                'success' => false,
                'message' => 'Home no encontrado'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $home
        ]);
    }

    /**
     * Crear Home
     */
    public function store(HomeRequest $request)
    {
        $home = Home::create(
            $request->validated()
        );

        return response()->json([
            'success' => true,
            'message' => 'Home creado correctamente',
            'data' => $home->load('user')
        ], 201);
    }

    /**
     * Actualizar Home
     */
    public function update(
        HomeRequest $request,
        int $id
    ) {
        $home = Home::find($id);

        if (!$home) {

            return response()->json([
                'success' => false,
                'message' => 'Home no encontrado'
            ], 404);
        }

        $home->update(
            $request->validated()
        );

        return response()->json([
            'success' => true,
            'message' => 'Home actualizado correctamente',
            'data' => $home->load('user')
        ]);
    }

    /**
     * Eliminar Home
     */
    public function destroy(int $id)
    {
        $home = Home::find($id);

        if (!$home) {

            return response()->json([
                'success' => false,
                'message' => 'Home no encontrado'
            ], 404);
        }

        $home->delete();

        return response()->json([
            'success' => true,
            'message' => 'Home eliminado correctamente'
        ]);
    }
}
