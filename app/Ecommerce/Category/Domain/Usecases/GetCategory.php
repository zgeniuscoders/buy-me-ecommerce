<?php

namespace App\Ecommerce\Category\Domain\Usecases;


use App\Ecommerce\Category\Domain\Repository\CategoryRepository;

class GetCategory
{
    public function __construct(private readonly CategoryRepository $repository){

    }

    public function run(int $category): \App\Ecommerce\Category\Domain\Models\Category
    {
        return $this->repository->getCategory($category);
    }

}
