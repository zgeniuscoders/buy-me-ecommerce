<?php

namespace App\Ecommerce\Category\Domain\Usecases;


use App\Ecommerce\Category\Domain\Repository\CategoryRepository;

class RemoveCategory
{

    public function __construct(private readonly CategoryRepository $repository){

    }

    public function run(int $category): void
    {
       $this->repository->removeCategory($category);
    }

}
