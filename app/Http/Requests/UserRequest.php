<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
        ];
    }

    public function messages()
    {
        /**
         * Enter messages different from those provided
         * by Laravel framework otherwise
         * it is useless
         */
        return [
            'first_name.required' => 'First name is Required :)',
            'first_name.max' => 'Must be less than or equal to 50 :)',
            'last_name.required' => 'Last name is Required :)',
            'last_name.max' => 'Must be less than or equal to 50 :)',
        ];
    }
}
