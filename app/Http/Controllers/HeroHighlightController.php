<?php

namespace App\Http\Controllers;

use App\Http\Requests\HeroHighlightRequest;

use App\Models\HeroHighlight;

class HeroHighlightController
{
    /**
     * Obtener todos los registros HeroHighlight.
     */
    public function index()
    {
        return response()->json(
            HeroHighlight::with('hero')->get()
        );
    }

    /**
     * Crear un nuevo HeroHighlight.
     */
    public function store(HeroHighlightRequest $request)
    {
        $heroHighlight = HeroHighlight::create(
            $request->validated()
        );

        return response()->json([
            'message' => 'HeroHighlight creado correctamente.',
            'data' => $heroHighlight
        ], 201);
    }

    /**
     * Mostrar un HeroHighlight específico.
     */
    public function show(HeroHighlight $heroHighlight)
    {
        $heroHighlight->load('hero');

        return response()->json(
            $heroHighlight
        );
    }

    /**
     * Actualizar un HeroHighlight existente.
     */
    public function update(
        HeroHighlightRequest $request,
        HeroHighlight $heroHighlight
    ) {

        $heroHighlight->update(
            $request->validated()
        );

        return response()->json([
            'message' => 'HeroHighlight actualizado correctamente.',
            'data' => $heroHighlight
        ]);
    }

    /**
     * Eliminar un HeroHighlight.
     */
    public function destroy(
        HeroHighlight $heroHighlight
    ) {

        $heroHighlight->delete();

        return response()->json([
            'message' => 'HeroHighlight eliminado correctamente.'
        ]);
    }
}
