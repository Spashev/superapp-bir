<?php

namespace App\Http\Repository\Admin\Product;

use App\Http\Repository\RepositoryAbstract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

final class ProductRepository extends RepositoryAbstract implements ProductRepositoryInterface
{
    public function create(array $attributes = [])
    {
        return DB::transaction(function() use($attributes) {
            $product = $this->model::create($attributes['product']);
            $product->images()->createMany($this->saveImage($attributes['images']));
            $product->tags()->sync($attributes['tags']);
            $product->categories()->sync($attributes['categories']);

            return $product;
        });
    }

    public function delete(int $id): ?bool
    {
        return DB::transaction(function() use($id) {
            $product = $this->find($id);
            $this->deleteImages($product);
            $product->tags()->detach();
            $product->categories()->detach();

            return $product->delete();
        });
    }

    public function update(array $attributes): bool
    {
        return DB::transaction(function() use($attributes) {
            $id = $attributes['id'];
            $product = $this->find($id);
            $product->update($attributes['product']);

            if ($attributes['images']) {
                $this->deleteImages($product);
                $product->images()->delete();
                $product->images()->createMany($this->saveImage($attributes['images']));
            }
            $product->tags()->sync($attributes['tags']);
            $product->categories()->sync($attributes['categories']);

            return $this->model->update($attributes);
        });
    }

    private function deleteImages(Model $product): void
    {
        foreach ($product->images as $image) {
            Storage::delete($image->original_path);
            Storage::delete($image->thumbnail_path);
        }
    }

    private function saveImage(array $images): array
    {
        $imagesPath = [];
        foreach ($images as $image) {
            $imageName = time() . random_int(1, 99) . '.' . $image->extension();
            $image->storeAs('/images', $imageName);
            $img = Image::make($image->path());
            $filePath = '/usr/share/nginx/html/project/storage/app/public/thumbnails/'. $imageName;
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save($filePath);
            $imagesPath[] = [
                'original_path' => 'images/' . $imageName,
                'thumbnail_path' => 'thumbnails/' . $imageName
            ];
        }

        return $imagesPath;
    }

    public function getAllWithPagination(int $limit)
    {
        return $this->model::with('images')->orderBy('id', 'DESC')->paginate($limit);
    }

    public function getAllWherePagination(int $limit, int $managerId)
    {
        return $this->model::with('images')->orderBy('id', 'DESC')->where('manager_id', $managerId)->paginate($limit);
    }
}
