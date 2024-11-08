<?php

namespace App\Ecommerce\Category\Domain\Usecases;


use App\Ecommerce\Category\Domain\Repository\CategoryRepository;

class CategoryInteractor
{
    public function __construct(
        public GetCategories $getCategories,
        public GetCategory $getCategory,
        public AddCategory $addCategory,
        public UpdateCategory $updateCategory,
        public RemoveCategory $removeCategory
    )
    {

    }

    static public function build(CategoryRepository $repository): CategoryInteractor
    {
        return new CategoryInteractor(
            new GetCategories($repository),
            new GetCategory($repository),
            new AddCategory($repository),
            new UpdateCategory($repository),
            new RemoveCategory($repository)
        );
    }
}
