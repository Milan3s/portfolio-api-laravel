<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EducationRequest extends FormRequest
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
                'exists:users,id'
            ],

            /**
             * Información principal
             */
            'title' => [
                'required',
                'string',
                'max:255'
            ],

            'subtitle' => [
                'nullable',
                'string',
                'max:255'
            ],

            'institution' => [
                'required',
                'string',
                'max:255'
            ],

            'location' => [
                'nullable',
                'string',
                'max:255'
            ],

            /**
             * Información académica
             */
            'education_level' => [
                'nullable',
                'string',
                'max:255'
            ],

            'plan' => [
                'nullable',
                'string',
                'max:255'
            ],

            'start_year' => [
                'nullable',
                'string',
                'max:255'
            ],

            'end_year' => [
                'nullable',
                'string',
                'max:255'
            ],

            'status' => [
                'nullable',
                'string',
                'max:255'
            ],

            'fct_status' => [
                'nullable',
                'string',
                'max:255'
            ],

            'project_grade' => [
                'nullable',
                'string',
                'max:255'
            ],

            /**
             * Certificación
             */
            'certificate_type' => [
                'nullable',
                'string',
                'max:255'
            ],

            'provider' => [
                'nullable',
                'string',
                'max:255'
            ],

            /**
             * Módulos
             */
            'modules' => [
                'nullable',
                'array'
            ],

            'modules.*' => [
                'string',
                'max:255'
            ],

            /**
             * Visual
             */
            'icon' => [
                'nullable',
                'string',
                'max:255'
            ],

            'color' => [
                'nullable',
                'string',
                'max:255'
            ],

            /**
             * Orden
             */
            'order_index' => [
                'nullable',
                'integer',
                'min:0'
            ],

            /**
             * Visibilidad
             */
            'is_visible' => [
                'nullable',
                'boolean'
            ],

            /**
             * Tipo
             */
            'type' => [
                'required',
                'string',
                'max:255'
            ],
        ];
    }
}
