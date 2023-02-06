<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Auth::guard('manager')->check();
    }

    public function rules()
    {
        return [
            'name' => 'required|string|min:3',
        ];
    }
}
