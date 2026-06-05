<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Http\Requests\EducationRequest;

class EducationController
{
    /**
     * Obtener toda la educación
     */
    public function index()
    {
        $education = Education::with('user')
            ->orderBy('order_index', 'asc')
            ->orderBy('start_year', 'desc')
            ->orderBy('id', 'desc')
            ->get();

        return response()->json([
            'success' => true,
            'data' => $education,
        ]);
    }

    /**
     * Crear educación
     */
    public function store(EducationRequest $request)
    {
        $education = Education::create(
            $request->validated()
        );

        return response()->json([
            'success' => true,
            'message' => 'Educación creada correctamente.',
            'data' => $education->load('user'),
        ], 201);
    }

    /**
     * Obtener educación por ID
     */
    public function show(Education $education)
    {
        return response()->json([
            'success' => true,
            'data' => $education->load('user'),
        ]);
    }

    /**
     * Actualizar educación
     */
    public function update(
        EducationRequest $request,
        Education $education
    ) {

        $education->update(
            $request->validated()
        );

        return response()->json([
            'success' => true,
            'message' => 'Educación actualizada correctamente.',
            'data' => $education->load('user'),
        ]);
    }

    /**
     * Eliminar educación
     */
    public function destroy(Education $education)
    {
        $education->delete();

        return response()->json([
            'success' => true,
            'message' => 'Educación eliminada correctamente.',
        ]);
    }

    /**
     * Obtener formación académica
     */
    public function academic()
    {
        $education = Education::with('user')
            ->where('type', 'academic')
            ->orderBy('order_index', 'asc')
            ->orderBy('start_year', 'desc')
            ->get();

        return response()->json([
            'success' => true,
            'data' => $education,
        ]);
    }

    /**
     * Obtener certificados
     */
    public function certifications()
    {
        $education = Education::with('user')
            ->where('type', 'certification')
            ->orderBy('order_index', 'asc')
            ->orderBy('start_year', 'desc')
            ->get();

        return response()->json([
            'success' => true,
            'data' => $education,
        ]);
    }

    /**
     * Obtener cursos
     */
    public function courses()
    {
        $education = Education::with('user')
            ->where('type', 'course')
            ->orderBy('order_index', 'asc')
            ->orderBy('start_year', 'desc')
            ->get();

        return response()->json([
            'success' => true,
            'data' => $education,
        ]);
    }
}
