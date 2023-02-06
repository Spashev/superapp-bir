<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProductUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return Auth::guard('manager')->check();
    }

    public function rules()
    {
        return [
            'name' => 'required|string|min:3',
            'price_per_night' => 'required',
            'address' => 'required',
            'rooms_qty' => 'required',
            'categories' => 'sometimes',
            'images' => 'sometimes',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096'
        ];
    }
}
