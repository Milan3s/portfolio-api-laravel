<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExperienceRequest;

use App\Models\Experience;

class ExperienceController
{
    /**
     * =========================
     * LISTAR EXPERIENCIAS
     * =========================
     */

    public function index()
    {
        $experiences = Experience::with('user')
            ->orderBy('start_date', 'desc')
            ->get();

        return response()->json([
            'success' => true,

            'data' => $experiences
        ]);
    }

    /**
     * =========================
     * CREAR EXPERIENCIA
     * =========================
     */

    public function store(
        ExperienceRequest $request
    ) {
        $experience = Experience::create(
            $request->validated()
        );

        /**
         * CARGAR USER
         */

        $experience->load('user');

        return response()->json([
            'success' => true,

            'message' =>
                'Experiencia creada correctamente',

            'data' => $experience
        ], 201);
    }

    /**
     * =========================
     * MOSTRAR EXPERIENCIA
     * =========================
     */

    public function show(
        Experience $experience
    ) {
        /**
         * CARGAR USER
         */

        $experience->load('user');

        return response()->json([
            'success' => true,

            'data' => $experience
        ]);
    }

    /**
     * =========================
     * ACTUALIZAR EXPERIENCIA
     * =========================
     */

    public function update(
        ExperienceRequest $request,
        Experience $experience
    ) {
        $experience->update(
            $request->validated()
        );

        /**
         * RECARGAR USER
         */

        $experience->load('user');

        return response()->json([
            'success' => true,

            'message' =>
                'Experiencia actualizada correctamente',

            'data' => $experience
        ]);
    }

    /**
     * =========================
     * ELIMINAR EXPERIENCIA
     * =========================
     */

    public function destroy(
        Experience $experience
    ) {
        $experience->delete();

        return response()->json([
            'success' => true,

            'message' =>
                'Experiencia eliminada correctamente'
        ]);
    }
}
