<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeroRequest extends FormRequest
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

            'user_id' => 'required|exists:users,id',

            'greeting' => 'nullable|string|max:255',

            'title' => 'required|string|max:255',

            'subtitle' => 'nullable|string|max:255',

            'description' => 'nullable|string',

            'secondary_cta_text' => 'nullable|string|max:255',

            'secondary_cta_link' => 'nullable|string|max:255',

            'image_url' => 'nullable|string|max:255',
        ];
    }

    /**
     * Mensajes personalizados.
     */
    public function messages(): array
    {
        return [

            'user_id.required' =>
                'El usuario es obligatorio.',

            'user_id.exists' =>
                'El usuario seleccionado no existe.',

            'title.required' =>
                'El título es obligatorio.',
        ];
    }
}
