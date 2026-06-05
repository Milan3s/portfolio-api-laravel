<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Http\Exceptions\HttpResponseException;

class LoginRequest extends FormRequest
{
    /**
     * Autorizar request
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Reglas validación
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [

            /**
             * Email opcional
             */
            'email' => [
                'nullable',
                'email',
                'required_without:name'
            ],

            /**
             * Usuario opcional
             */
            'name' => [
                'nullable',
                'string',
                'required_without:email'
            ],

            /**
             * Password
             */
            'password' => [
                'required',
                'string',
                'min:6'
            ]
        ];
    }

    /**
     * Mensajes personalizados
     */
    public function messages(): array
    {
        return [

            'email.required_without' =>
                'Debe introducir email o usuario',

            'email.email' =>
                'El email no es válido',

            'name.required_without' =>
                'Debe introducir email o usuario',

            'password.required' =>
                'La contraseña es obligatoria',

            'password.min' =>
                'La contraseña debe tener al menos 6 caracteres'
        ];
    }

    /**
     * Forzar respuesta JSON
     */
    protected function failedValidation(
        Validator $validator
    ) {

        throw new HttpResponseException(

            response()->json([

                'success' => false,

                'message' => 'Error de validación',

                'errors' => $validator->errors()

            ], 422)

        );
    }
}
