<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
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
             * Name
             */
            'name' => [
                'required',
                'string',
                'max:150',
            ],

            /**
             * Icon
             */
            'icon' => [
                'required',
                'string',
                'max:150',
            ],

            /**
             * Description
             */
            'description' => [
                'required',
                'string',
                'max:5000',
            ],

        ];
    }
}
