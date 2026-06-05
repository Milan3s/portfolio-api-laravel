<?php

namespace App\Http\Controllers;

use App\Http\Requests\HeroRequest;
use App\Models\Hero;
use Illuminate\Http\JsonResponse;

class HeroController
{
    /**
     * Obtener todos los registros Hero.
     */
    public function index(): JsonResponse
    {
        $heroes = Hero::with([
            'user',
            'highlights'
        ])->get();

        return response()->json($heroes);
    }

    /**
     * Crear un nuevo Hero.
     */
    public function store(HeroRequest $request): JsonResponse
    {
        $hero = Hero::create($request->validated());

        return response()->json([
            'message' => 'Hero creado correctamente.',
            'data' => $hero
        ], 201);
    }

    /**
     * Mostrar un Hero específico.
     */
    public function show(Hero $hero): JsonResponse
    {
        $hero->load([
            'user',
            'highlights'
        ]);

        return response()->json($hero);
    }

    /**
     * Actualizar un Hero existente.
     */
    public function update(HeroRequest $request, Hero $hero): JsonResponse
    {
        $hero->update($request->validated());

        return response()->json([
            'message' => 'Hero actualizado correctamente.',
            'data' => $hero
        ]);
    }

    /**
     * Eliminar un Hero.
     */
    public function destroy(Hero $hero): JsonResponse
    {
        $hero->delete();

        return response()->json([
            'message' => 'Hero eliminado correctamente.'
        ]);
    }
}
