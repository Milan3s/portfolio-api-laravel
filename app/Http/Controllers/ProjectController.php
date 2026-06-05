<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Http\JsonResponse;

class ProjectController
{
    /**
     * Obtener todos los proyectos
     */
    public function index(): JsonResponse
    {
        $projects = Project::query()
            ->latest()
            ->get();

        return response()->json([
            'success' => true,

            'data' => $projects,

            'filters' => [

                'all' => $projects->count(),

                'frontend' => $projects
                    ->where('type', 'Frontend')
                    ->count(),

                'backend' => $projects
                    ->where('type', 'Backend')
                    ->count(),

                'api' => $projects
                    ->where('type', 'API')
                    ->count(),

                'desktop' => $projects
                    ->where('type', 'Desktop')
                    ->count(),

                'mobile' => $projects
                    ->where('type', 'Mobile')
                    ->count(),

                'fullStack' => $projects
                    ->where('type', 'Full Stack')
                    ->count(),
            ]
        ]);
    }

    /**
     * Obtener total de proyectos
     */
    public function count(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'count' => Project::count()
        ]);
    }

    /**
     * Obtener proyecto por ID
     */
    public function show(string $id): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => Project::findOrFail($id)
        ]);
    }

    /**
     * Obtener proyectos por usuario
     */
    public function byUser(string $userId): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => Project::query()
                ->where('user_id', $userId)
                ->latest()
                ->get()
        ]);
    }

    /**
     * Crear proyecto
     */
    public function store(
        ProjectRequest $request
    ): JsonResponse {

        $project = Project::create(
            $request->validated()
        );

        return response()->json([
            'success' => true,
            'message' => 'Proyecto creado correctamente',
            'data' => $project
        ], 201);
    }

    /**
     * Actualizar proyecto
     */
    public function update(
        ProjectRequest $request,
        string $id
    ): JsonResponse {

        $project = Project::findOrFail($id);

        $project->update(
            $request->validated()
        );

        return response()->json([
            'success' => true,
            'message' => 'Proyecto actualizado correctamente',
            'data' => $project
        ]);
    }

    /**
     * Eliminar proyecto
     */
    public function destroy(string $id): JsonResponse
    {
        $project = Project::findOrFail($id);

        $project->delete();

        return response()->json([
            'success' => true,
            'message' => 'Proyecto eliminado correctamente'
        ]);
    }
}
