<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Dto\CategoryDTO;
use App\Http\Repository\Admin\Category\CategoryRepositoryInterface;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct(private CategoryRepositoryInterface $repository)
    {
        $this->middleware('permission:view-category|create-category|edit-category|delete-category', ['only' => ['index','store']]);
        $this->middleware('permission:create-category', ['only' => ['create','store']]);
        $this->middleware('permission:edit-category', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-category', ['only' => ['destroy']]);

        $this->repository = $repository;
    }

    public function index()
    {
        $categories = $this->repository->getAllWithPagination(20);
        $parents = $this->repository->getParents();

        return view('admin.category.index', compact('categories', 'parents'));
    }

    public function store(CategoryRequest $request)
    {
        try {
            $category = $this->repository->create((new CategoryDTO())($request->toArray()));
            $message = $category ? 'Category created successfully' : 'Some error in server, category doesn\'t created.';

            return to_route('admin.category.index')->withSuccess($message);
        } catch (\Exception $e) {
            $categories = Category::orderBy('id')->paginate(20);

            return view('admin.category.index', ['category' => $categories])->withError('Some error');
        }
    }

    public function edit(Category $category)
    {
        $parents = $this->repository->getParents();

        return view('admin.category.edit', compact('category', 'parents'));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        try{
            $this->repository->update((new CategoryDTO())($request->toArray()) + ['id' => $category->id]);

            return to_route('admin.category.index')->withSuccess('Category updated successfully');
        } catch (\Exception $e) {
            return to_route('admin.category.index')->withError($e->getMessage());
        }
    }

    public function destroy(Category $category)
    {
        $this->repository->delete($category->id);

        return to_route('admin.category.index')->withSuccess('Category deleted');
    }
}
