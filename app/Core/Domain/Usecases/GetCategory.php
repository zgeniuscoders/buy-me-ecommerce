<?php

namespace App\Core\Domain\Usecases;


use App\Admin\Domain\Repository\CategoryRepository;

class GetCategory
{
    public function __construct(private readonly CategoryRepository $repository){

    }

    public function run(int $category): \App\Core\Domain\Models\Category
    {
        return $this->repository->getCategory($category);
    }

}
