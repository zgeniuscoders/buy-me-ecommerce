<?php

namespace App\Admin\Domain\Usecases\Category;


use App\Admin\Domain\Repository\CategoryRepository;

class RemoveCategory
{

    public function __construct(private readonly CategoryRepository $repository){

    }

    public function run(int $category): void
    {
       $this->repository->removeCategory($category);
    }

}
