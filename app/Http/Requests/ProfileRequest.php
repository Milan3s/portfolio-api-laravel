<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
        $profileId = $this->route('id');

        return [

            'user_id' => [

                'sometimes',

                'exists:users,id',

                'unique:profiles,user_id,' . $profileId
            ],

            'full_name' => [

                'sometimes',

                'string',

                'max:255'
            ],

            'title' => [

                'nullable',

                'string',

                'max:255'
            ],

            'bio' => [

                'nullable',

                'string'
            ],

            'avatar_url' => [

                'nullable',

                'string',

                'max:255'
            ],

            'available_for_work' => [

                'sometimes',

                'boolean'
            ]
        ];
    }
}
