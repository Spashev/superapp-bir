<?php

namespace App\Http\Dto;

final class TagDTO
{
    public function __invoke(array $data): array
    {
        return [
            'name' => $data['name'] ?? '',
            'description' => $data['description'] ?? '',
            'is_active' => isset($data['is_active']),
            'icon' => $data['icon'] ?? ''
        ];
    }
}
