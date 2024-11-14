<?php

namespace App\Ecommerce\Category\Domain\Repository;

use App\Core\Domain\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Client\Request;

interface CategoryRepository
{

    public function getCategories(): Collection;

    public function getCategory(Request $request): Category;

}
