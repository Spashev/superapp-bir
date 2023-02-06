<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return Auth::guard('manager')->check();
    }

    public function rules()
    {
        return [
            'name' => 'required|unique:products|string|min:3',
            'price_per_night' => 'required',
            'address' => 'required',
            'rooms_qty' => 'required',
            'categories' => 'sometimes|exists:categories,id',
            'images' => 'required',
            'images.*' => 'image|mimes:webp,jpeg,png,jpg,gif,svg'
        ];
    }
}
