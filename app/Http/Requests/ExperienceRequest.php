<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceRequest extends FormRequest
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
            'company' => [
                'required',
                'string',
                'max:255'
            ],

            'position' => [
                'required',
                'string',
                'max:255'
            ],

            'description' => [
                'nullable',
                'string'
            ],

            'details' => [
                'nullable',
                'string'
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
             * Fechas
             */
            'start_date' => [
                'required',
                'date'
            ],

            'end_date' => [
                'nullable',
                'date'
            ],

            'currently_working' => [
                'nullable',
                'boolean'
            ],
        ];
    }
}
