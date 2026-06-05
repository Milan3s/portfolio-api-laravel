<?php

namespace App\Http\Controllers;

use App\Models\Skill;

use App\Http\Requests\SkillRequest;

class SkillController
{
    /**
     * Obtener todas las skills
     */
    public function index()
    {
        $skills = Skill::with('user')
            ->latest('id')
            ->get();

        return response()->json([
            'success' => true,
            'data'    => $skills,
        ]);
    }

    /**
     * Crear skill
     */
    public function store(SkillRequest $request)
    {
        $validated = $request->validated();

        $skill = Skill::create([
            'user_id'     => $validated['user_id'],
            'name'        => $validated['name'],
            'icon'        => $validated['icon'],
            'description' => $validated['description'],
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Skill creada correctamente.',
            'data'    => $skill->load('user'),
        ], 201);
    }

    /**
     * Obtener skill
     */
    public function show(Skill $skill)
    {
        return response()->json([
            'success' => true,
            'data'    => $skill->load('user'),
        ]);
    }

    /**
     * Actualizar skill
     */
    public function update(
        SkillRequest $request,
        Skill $skill
    ) {
        $validated = $request->validated();

        $skill->update([
            'user_id'     => $validated['user_id'],
            'name'        => $validated['name'],
            'icon'        => $validated['icon'],
            'description' => $validated['description'],
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Skill actualizada correctamente.',
            'data'    => $skill->load('user'),
        ]);
    }

    /**
     * Eliminar skill
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();

        return response()->json([
            'success' => true,
            'message' => 'Skill eliminada correctamente.',
        ]);
    }
}
