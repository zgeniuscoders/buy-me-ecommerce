<?php

namespace App\Core\Domain\Usecases;


use App\Admin\Domain\Repository\CategoryRepository;

class GetCategories
{
    public function __construct(private readonly CategoryRepository $categoryRepository)
    {

    }

    public function run(){
        return $this->categoryRepository->getCategories();
    }
}
