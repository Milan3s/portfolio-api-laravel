<?php

namespace App\Http\Controllers;

use App\Models\SocialLink;

use App\Http\Requests\SocialLinkRequest;

class SocialLinkController
{
    /**
     * Obtener todas las redes sociales
     */
    public function index()
    {
        $socialLinks = SocialLink::with('user')
            ->orderBy('order_index', 'asc')
            ->orderBy('id', 'desc')
            ->get();

        return response()->json([

            'success' => true,

            'data' => $socialLinks
        ]);
    }

    /**
     * Obtener red social por ID
     */
    public function show(string $id)
    {
        $socialLink = SocialLink::with('user')
            ->find($id);

        if (!$socialLink) {

            return response()->json([

                'success' => false,

                'message' => 'Red social no encontrada'

            ], 404);
        }

        return response()->json([

            'success' => true,

            'data' => $socialLink
        ]);
    }

    /**
     * Crear red social
     */
    public function store(SocialLinkRequest $request)
    {
        $validated = $request->validated();

        $socialLink = SocialLink::create($validated);

        return response()->json([

            'success' => true,

            'message' => 'Red social creada correctamente',

            'data' => $socialLink

        ], 201);
    }

    /**
     * Actualizar red social
     */
    public function update(
        SocialLinkRequest $request,
        string $id
    ) {

        $socialLink = SocialLink::find($id);

        if (!$socialLink) {

            return response()->json([

                'success' => false,

                'message' => 'Red social no encontrada'

            ], 404);
        }

        $validated = $request->validated();

        $socialLink->update($validated);

        return response()->json([

            'success' => true,

            'message' => 'Red social actualizada correctamente',

            'data' => $socialLink
        ]);
    }

    /**
     * Eliminar red social
     */
    public function destroy(string $id)
    {
        $socialLink = SocialLink::find($id);

        if (!$socialLink) {

            return response()->json([

                'success' => false,

                'message' => 'Red social no encontrada'

            ], 404);
        }

        $socialLink->delete();

        return response()->json([

            'success' => true,

            'message' => 'Red social eliminada correctamente'
        ]);
    }
}
