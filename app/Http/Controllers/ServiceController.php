<?php

namespace App\Http\Controllers;

use App\Models\Service;

use Illuminate\Http\JsonResponse;

use App\Http\Requests\ServiceRequest;

class ServiceController
{
    /**
     * Obtener todos los servicios
     */
    public function index(): JsonResponse
    {
        $services = Service::with('user')
            ->latest('id')
            ->get();

        return response()->json([
            'success' => true,
            'data'    => $services,
        ]);
    }

    /**
     * Crear servicio
     */
    public function store(
        ServiceRequest $request
    ): JsonResponse {

        $validated = $request->validated();

        $service = Service::create([
            'user_id'     => $validated['user_id'],
            'title'       => $validated['title'],
            'slug'        => $validated['slug'],
            'icon'        => $validated['icon'],
            'description' => $validated['description'],
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Servicio creado correctamente.',
            'data'    => $service->load('user'),
        ], 201);
    }

    /**
     * Obtener servicio por ID
     */
    public function show(
        Service $service
    ): JsonResponse {

        return response()->json([
            'success' => true,
            'data'    => $service->load('user'),
        ]);
    }

    /**
     * Obtener servicio por slug
     */
    public function showBySlug(
        string $slug
    ): JsonResponse {

        $service = Service::with('user')
            ->where('slug', $slug)
            ->firstOrFail();

        return response()->json([
            'success' => true,
            'data'    => $service,
        ]);
    }

    /**
     * Actualizar servicio
     */
    public function update(
        ServiceRequest $request,
        Service $service
    ): JsonResponse {

        $validated = $request->validated();

        $service->update([
            'user_id'     => $validated['user_id'],
            'title'       => $validated['title'],
            'slug'        => $validated['slug'],
            'icon'        => $validated['icon'],
            'description' => $validated['description'],
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Servicio actualizado correctamente.',
            'data'    => $service->load('user'),
        ]);
    }

    /**
     * Eliminar servicio
     */
    public function destroy(
        Service $service
    ): JsonResponse {

        $service->delete();

        return response()->json([
            'success' => true,
            'message' => 'Servicio eliminado correctamente.',
        ]);
    }
}
