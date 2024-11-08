<?php

namespace App\Ecommerce\Category\Domain\Repository;

use App\Ecommerce\Category\Domain\Models\Category;
use Illuminate\Http\Request;


interface CategoryRepository
{
    public function getCategories();

    public function getCategory(int $categoryId): Category;

    public function addCategory(Request $request): Category;

    public function updateCategory(Request $request, int $categoryId): Category;

    public function removeCategory(int $categoryId): void;


}
