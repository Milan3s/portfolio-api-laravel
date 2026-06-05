<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
             * Información contacto
             */
            'name' => [
                'required',
                'string',
                'max:255'
            ],

            'email' => [
                'required',
                'email',
                'max:255'
            ],

            'subject' => [
                'nullable',
                'string',
                'max:255'
            ],

            'message' => [
                'required',
                'string'
            ],

            /**
             * Estado
             */
            'status' => [
                'nullable',
                'string',
                'max:50'
            ],

            'hidden' => [
                'nullable',
                'boolean'
            ],

            /**
             * Seguridad / Metadata
             */
            'ip_address' => [
                'nullable',
                'string',
                'max:255'
            ],

            'user_agent' => [
                'nullable',
                'string'
            ],

            /**
             * Respuesta
             */
            'replied_at' => [
                'nullable',
                'date'
            ],
        ];
    }
}
