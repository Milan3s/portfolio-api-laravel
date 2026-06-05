<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    /**
     * Determinar si el usuario está autorizado
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Reglas de validación
     */
    public function rules(): array
    {
        $projectId = $this->route('project');

        return [

            'user_id' => [

                'required',

                'exists:users,id'
            ],

            'title' => [

                'required',

                'string',

                'max:255'
            ],

            'slug' => [

                'required',

                'string',

                'max:255',

                'unique:projects,slug,' . $projectId
            ],

            'description' => [

                'nullable',

                'string'
            ],

            'icon' => [

                'nullable',

                'string',

                'max:255'
            ],

            'type' => [

                'required',

                'string',

                'max:100'
            ],

            'technologies' => [

                'nullable',

                'string'
            ],

            'github_url' => [

                'nullable',

                'url',

                'max:255'
            ],

            'video_url' => [

                'nullable',

                'url',

                'max:255'
            ],

            'status' => [

                'required',

                'in:Disponible,En desarrollo,En construcción'
            ]
        ];
    }

    /**
     * Mensajes personalizados
     */
    public function messages(): array
    {
        return [

            'user_id.required' => 'El usuario es obligatorio.',

            'user_id.exists' => 'El usuario seleccionado no existe.',

            'title.required' => 'El título es obligatorio.',

            'slug.required' => 'El slug es obligatorio.',

            'slug.unique' => 'El slug ya existe.',

            'type.required' => 'El tipo del proyecto es obligatorio.',

            'github_url.url' => 'La URL de GitHub no es válida.',

            'video_url.url' => 'La URL del vídeo no es válida.',

            'status.required' => 'El estado es obligatorio.',

            'status.in' => 'El estado seleccionado no es válido.'
        ];
    }
}
