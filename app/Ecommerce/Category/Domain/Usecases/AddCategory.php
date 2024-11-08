<?php

namespace App\Ecommerce\Category\Domain\Usecases;

use App\Ecommerce\Category\Domain\Repository\CategoryRepository;
use Illuminate\Http\Request;

class AddCategory
{

    public function __construct(private readonly CategoryRepository $repository){

    }

    public function run(Request $request): \App\Ecommerce\Category\Domain\Models\Category
    {
        return $this->repository->addCategory($request);
    }

}
