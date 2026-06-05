<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ServiceRequest extends FormRequest
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
        $service = $this->route('service');

        return [

            /**
             * User Owner
             */
            'user_id' => [
                'required',
                'integer',
                'exists:users,id',
            ],

            /**
             * Service Title
             */
            'title' => [
                'required',
                'string',
                'max:200',
            ],

            /**
             * SEO Slug
             */
            'slug' => [
                'required',
                'string',
                'max:200',
                Rule::unique('services', 'slug')
                    ->ignore(
                        $service?->id
                    ),
            ],

            /**
             * Service Icon
             */
            'icon' => [
                'required',
                'string',
                'max:150',
            ],

            /**
             * Service Description
             *
             * Contendrá los <li> HTML
             */
            'description' => [
                'required',
                'string',
            ],

        ];
    }
}
