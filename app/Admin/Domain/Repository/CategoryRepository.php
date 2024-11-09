<?php

namespace App\Admin\Domain\Repository;

use App\Admin\Framework\Requests\AddCategoryRequest;
use App\Admin\Framework\Requests\UpdateCategoryRequest;
use App\Core\Domain\Models\Category;
use Illuminate\Database\Eloquent\Collection;


interface CategoryRepository
{
    public function getCategories(): Collection;

    public function getCategory(int $categoryId): Category;

    public function addCategory(array $data): Category;

    public function updateCategory(UpdateCategoryRequest $request, int $categoryId): Category;

    public function removeCategory(int $categoryId): void;

}
