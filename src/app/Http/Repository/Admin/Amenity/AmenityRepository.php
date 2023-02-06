<?php

namespace App\Http\Repository\Admin\Amenity;

use App\Http\Repository\RepositoryAbstract;

final class AmenityRepository extends RepositoryAbstract implements AmenityRepositoryInterface
{
    public function create(array $attributes)
    {
        return $this->model::create($attributes);
    }

    public function update(array $attributes)
    {
        return $this->find($attributes['id'])->update($attributes);
    }

    public function delete(int $id): ?bool
    {
        return $this->find($id)->delete();
    }
}
