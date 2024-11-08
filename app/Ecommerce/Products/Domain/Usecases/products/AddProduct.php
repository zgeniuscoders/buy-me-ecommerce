<?php

namespace App\Ecommerce\Products\Domain\Usecases\products;

use App\Ecommerce\Products\Domain\Models\Product;
use App\Ecommerce\Products\Domain\Repository\ProductRepository;
use Illuminate\Http\Request;

class AddProduct
{

    public function __construct(private readonly ProductRepository $repository)
    {
    }

    public function run(Request $request): Product
    {
        return $this->repository->addProduct($request);
    }
}
