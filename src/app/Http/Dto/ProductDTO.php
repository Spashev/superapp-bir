<?php

namespace App\Http\Dto;

use Illuminate\Foundation\Http\FormRequest;

final class ProductDTO
{
    public function __invoke(FormRequest $request): array
    {
        return [
            'product' => [
                'name' => $request->name ?? '',
                'address' => $request->address ?? '',
                'price_per_night' => $request->price_per_night ?? 0,
                'price_per_week' => $request->price_per_week ?? 0,
                'price_per_month' => $request->price_per_month ?? 0,
                'rooms_qty' => $request->rooms_qty ?? 1,
                'swimming_pool' => isset($request->swimming_pool),
                'trestle_bed' => isset($request->trestle_bed),
                'sauna' => isset($request->sauna),
                'status' => isset($request->status),
                'is_active' => isset($request->is_active),
                'manager_id' => Auth('manager')->user()->id
            ],
            'images' => $request->images ?? '',
            'categories' => $request->categories ?? '',
            'tags' => $request->tags ?? '',
        ];
    }
}
