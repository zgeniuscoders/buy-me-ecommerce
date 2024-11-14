<?php

namespace App\Ecommerce\Category\Framework\Repository;

use App\Core\Domain\Models\Category;
use App\Ecommerce\Category\Domain\Repository\CategoryRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Client\Request;

class CategoryRepositoryImpl implements CategoryRepository
{

    public function getCategories(): Collection
    {
        return Category::all();
    }

    public function getCategory(Request $request): Category
    {
        return Category::findOrFail($request->categoryId);
    }
}
