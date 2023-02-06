<?php

namespace App\Providers;

use App\Http\Repository\Admin\Amenity\AmenityRepository;
use App\Http\Repository\Admin\Amenity\AmenityRepositoryInterface;
use App\Http\Repository\Admin\Category\CategoryRepository;
use App\Http\Repository\Admin\Category\CategoryRepositoryInterface;
use App\Http\Repository\Admin\Product\ProductRepository;
use App\Http\Repository\Admin\Product\ProductRepositoryInterface;
use App\Http\Repository\Admin\Tag\TagRepository;
use App\Http\Repository\Admin\Tag\TagRepositoryInterface;
use App\Models\Amenity;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function register(): void
    {
        $this->app->bind(ProductRepositoryInterface::class, function() {
            return new ProductRepository(new Product());
        });
        $this->app->bind(TagRepositoryInterface::class, function() {
            return new TagRepository(new Tag());
        });
        $this->app->bind(CategoryRepositoryInterface::class, function() {
            return new CategoryRepository(new Category());
        });
        $this->app->bind(AmenityRepositoryInterface::class, function() {
            return new AmenityRepository(new Amenity());
        });
    }

    public function boot(): void
    {
        //
    }

    public function provides(): array
    {
        return [ProductRepositoryInterface::class, TagRepositoryInterface::class, CategoryRepositoryInterface::class, AmenityRepositoryInterface::class];
    }
}
