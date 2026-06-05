<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SocialLinkRequest extends FormRequest
{
    /**
     * Autorizar request
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

            'user_id' => [

                'sometimes',

                'exists:users,id'
            ],

            'platform' => [

                'sometimes',

                'string',

                'max:100'
            ],

            'url' => [

                'sometimes',

                'string',

                'max:255'
            ],

            'icon' => [

                'nullable',

                'string',

                'max:100'
            ],

            'order_index' => [

                'sometimes',

                'integer',

                'min:0'
            ],

            'is_active' => [

                'sometimes',

                'boolean'
            ]
        ];
    }
}
