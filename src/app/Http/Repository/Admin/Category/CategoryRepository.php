<?php

namespace App\Http\Repository\Admin\Category;

use App\Http\Repository\RepositoryAbstract;

final class CategoryRepository extends RepositoryAbstract implements CategoryRepositoryInterface
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

    public function getParents()
    {
        return $this->model::where('parent', '=', null)->get();
    }
}

