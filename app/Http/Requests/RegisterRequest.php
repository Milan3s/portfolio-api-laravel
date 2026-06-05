<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Http\Exceptions\HttpResponseException;

class RegisterRequest extends FormRequest
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

            'name' => [
                'required',
                'string',
                'min:3',
                'max:50',
                'unique:users,name'
            ],

            'email' => [
                'required',
                'email',
                'max:150',
                'unique:users,email'
            ],

            'password' => [
                'required',
                'string',
                'min:6',
                'max:255',
                'confirmed'
            ]
        ];
    }

    /**
     * Mensajes personalizados
     */
    public function messages(): array
    {
        return [

            'name.required' => 'El nombre es obligatorio',

            'name.unique' => 'El nombre ya existe',

            'email.required' => 'El email es obligatorio',

            'email.email' => 'El email no es válido',

            'email.unique' => 'El email ya existe',

            'password.required' => 'La contraseña es obligatoria',

            'password.min' => 'La contraseña debe tener al menos 6 caracteres',

            'password.confirmed' => 'Las contraseñas no coinciden'
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
