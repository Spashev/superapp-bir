<?php

namespace App\Http\Repository;

interface RepositoryInterface
{
    public function find(int $id);
    public function create(array $attributes);
    public function update(array $attributes);
    public function all();
}
