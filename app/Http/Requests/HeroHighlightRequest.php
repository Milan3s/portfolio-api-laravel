<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeroHighlightRequest extends FormRequest
{
    /**
     * Determinar si el usuario está autorizado.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Reglas de validación.
     */
    public function rules(): array
    {
        return [

            'hero_id' => 'required|exists:hero,id',

            'title' => 'required|string|max:150',

            'description' => 'nullable|string|max:255',

            'icon' => 'nullable|string|max:100',

            'order_index' => 'nullable|integer|min:0',
        ];
    }

    /**
     * Mensajes personalizados.
     */
    public function messages(): array
    {
        return [

            'hero_id.required' => 'El hero es obligatorio.',

            'hero_id.exists' => 'El hero seleccionado no existe.',

            'title.required' => 'El título es obligatorio.',

            'title.max' => 'El título no puede superar los 150 caracteres.',

            'description.max' => 'La descripción no puede superar los 255 caracteres.',

            'icon.max' => 'El icono no puede superar los 100 caracteres.',

            'order_index.integer' => 'El orden debe ser numérico.',
        ];
    }
}
