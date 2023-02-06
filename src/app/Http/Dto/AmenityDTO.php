<?php

namespace App\Http\Dto;

final class AmenityDTO
{
    public function __invoke(array $data): array
    {
        return [
            'name' => $data['name'] ?? '',
            'icon' => $data['icon'] ?? '',
            'is_active' => isset($data['is_active'])
        ];
    }
}
