<?php

namespace App\Admin\Domain\Usecases\Category;


use App\Admin\Domain\Repository\CategoryRepository;
use App\Core\Domain\Models\Category;
use Illuminate\Http\Request;

class UpdateCategory
{

    public function __construct(private readonly CategoryRepository $repository){

    }

    public function run(Request $request,int $category): Category
    {
        return $this->repository->updateCategory($request,$category);
    }

}
