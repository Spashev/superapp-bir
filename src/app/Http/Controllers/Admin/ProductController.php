<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Dto\ProductDTO;
use App\Http\Repository\Admin\Product\ProductRepositoryInterface;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Amenity;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    private ProductRepositoryInterface $repository;

    public function __construct(ProductRepositoryInterface $repository)
    {
        $this->middleware('permission:view-product|create-product|edit-product|delete-product', ['only' => ['index','store']]);
        $this->middleware('permission:create-product', ['only' => ['create','store']]);
        $this->middleware('permission:edit-product', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-product', ['only' => ['destroy']]);

        $this->repository = $repository;
    }

    public function index()
    {
        $adminRole = auth()->user()->hasRole('admin');
        $products = $adminRole ? $this->repository->getAllWithPagination(20) : $this->repository->getAllWherePagination(20, auth()->user()->id);

        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $amenities = Amenity::all();

        return view('admin.product.create', [
            'categories' => $categories,
            'amenities' => $amenities
        ]);
    }

    public function store(ProductRequest $request)
    {
        try {
            $productDTO = (new ProductDTO())($request);
            $product = $this->repository->create($productDTO);
            $message = $product ? 'Product created successfully' : 'Some error in server, product doesn\'t created.';

            return to_route('admin.product.index')->withSuccess($message);
        } catch (\Exception $e) {
            return to_route('admin.product.index')->withError($e->getMessage());
        }
    }

    public function edit(Product $product)
    {
        $categories = Category::all();

        return view('admin.product.edit', compact('product', 'categories'));
    }

    public function update(ProductUpdateRequest $request, Product $product)
    {
        try{
            $productDTO = (new ProductDTO())($request);
            $productDTO['id'] = $product->id;
            $productDTO['product']['manager_id'] = $product->manager->id;

            if($product->is_active) {
                $productDTO['product']['is_active'] = $product->is_active;
            }

            $this->repository->update(($productDTO));

            return to_route('admin.product.index')->withSuccess('Product updated successfully');
        } catch (\Exception $e) {
            return to_route('admin.product.index')->withError($e->getMessage());
        }
    }

    public function destroy(Product $product)
    {
        $deleted = $this->repository->delete($product->id);
        $message = $deleted ? 'Product deleted successfully' : 'Unable to delete product, some error on server';

        return to_route('admin.product.index')->withSuccess($message);
    }
}
