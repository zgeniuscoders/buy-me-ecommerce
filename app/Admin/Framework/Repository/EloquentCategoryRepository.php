<?php

namespace App\Admin\Framework\Repository;

use App\Admin\Domain\Repository\CategoryRepository;
use App\Admin\Framework\Requests\AddCategoryRequest;
use App\Admin\Framework\Requests\UpdateCategoryRequest;
use App\Core\Domain\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class EloquentCategoryRepository implements CategoryRepository
{

    public function getCategories(): Collection
    {
        return Category::with("categories")->get();
    }

    public function getCategory(int $categoryId): Category
    {
        return Category::find($categoryId);
    }

    public function addCategory(array $data): Category
    {
        return Category::create($data);
    }

    public function updateCategory(UpdateCategoryRequest $request, int $categoryId): Category
    {
        $category = Category::findOrFail($categoryId);
        $category->update($request->all());
        return $category;
    }

    public function removeCategory(int $categoryId): void
    {
        $category = Category::findOrFail($categoryId);
        $category->delete();
    }
}
