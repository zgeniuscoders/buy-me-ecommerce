<?php

namespace App\Ecommerce\Category\Domain\Usecases;


use App\Ecommerce\Category\Domain\Repository\CategoryRepository;

class GetCategories
{
    public function __construct(private readonly CategoryRepository $categoryRepository)
    {

    }

    public function run(){
        return $this->categoryRepository->getCategories();
    }
}
