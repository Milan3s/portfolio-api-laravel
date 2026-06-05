<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeRequest extends FormRequest
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
        return [

            /**
             * Usuario
             */
            'user_id' => [
                'required',
                'integer',
                'exists:users,id',
                'unique:home,user_id'
            ],

            /**
             * Información principal
             */
            'name' => [
                'required',
                'string',
                'max:255'
            ],

            'full_name' => [
                'required',
                'string',
                'max:255'
            ],

            'headline' => [
                'nullable',
                'string',
                'max:255'
            ],

            'description' => [
                'nullable',
                'string'
            ],

            /**
             * Badge
             */
            'badge_text' => [
                'nullable',
                'string',
                'max:255'
            ],

            /**
             * Experiencia y proyectos
             */
            'years_experience' => [
                'nullable',
                'integer',
                'min:0'
            ],

            'projects_completed' => [
                'nullable',
                'integer',
                'min:0'
            ],

            /**
             * Estado
             */
            'is_active' => [
                'nullable',
                'boolean'
            ],

            /**
             * Logo
             */
            'logo_url' => [
                'nullable',
                'string',
                'max:255'
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
            'user_id.unique' => 'Este usuario ya tiene un registro home asignado.',

            'name.required' => 'El nombre es obligatorio.',
            'name.max' => 'El nombre no puede superar 255 caracteres.',

            'full_name.required' => 'El nombre completo es obligatorio.',
            'full_name.max' => 'El nombre completo no puede superar 255 caracteres.',

            'headline.max' => 'El titular no puede superar 255 caracteres.',

            'badge_text.max' => 'El badge no puede superar 255 caracteres.',

            'years_experience.integer' => 'Los años de experiencia deben ser numéricos.',
            'years_experience.min' => 'Los años de experiencia no pueden ser negativos.',

            'projects_completed.integer' => 'Los proyectos completados deben ser numéricos.',
            'projects_completed.min' => 'Los proyectos completados no pueden ser negativos.',

            'is_active.boolean' => 'El estado activo debe ser verdadero o falso.',

            'logo_url.max' => 'La URL del logo no puede superar 255 caracteres.'
        ];
    }
}
