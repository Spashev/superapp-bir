<?php

namespace App\Http\Repository;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class RepositoryAbstract
{
    public function __construct(public Model $model)
    {
        $this->model = $model;
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function find(int $id)
    {
        return $this->model::find($id);
    }

    public function getAllWithPagination(int $limit)
    {
        return $this->model::orderBy('id', 'DESC')->paginate($limit);
    }

    public function getAllWherePagination(int $limit, int $managerId)
    {
        return $this->model::orderBy('id', 'DESC')->where('manager_id', $managerId)->paginate($limit);
    }
}
