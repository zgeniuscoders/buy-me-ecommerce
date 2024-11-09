<?php

namespace App\Admin\Domain\Usecases\Category;

use App\Admin\Domain\Repository\CategoryRepository;
use Illuminate\Http\Request;

readonly class AddCategory
{

    public function __construct(private CategoryRepository $repository){

    }

    public function run(array $data): \App\Core\Domain\Models\Category
    {
        return $this->repository->addCategory($data);
    }

}
