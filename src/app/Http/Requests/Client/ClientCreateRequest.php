<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class ClientCreateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name' => 'required|min:3',
            'second_name' => 'required|min:3',
            'middle_name' => 'sometimes|min:3',
            'email' => 'required|email|unique:users',
            'phone' => 'max:13',
            'password' => 'required|confirmed|min:6',
            'address' => 'sometimes',
        ];
    }
}
