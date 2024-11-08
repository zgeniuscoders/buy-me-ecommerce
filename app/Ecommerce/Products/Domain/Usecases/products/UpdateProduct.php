<?php

namespace App\Ecommerce\Products\Domain\Usecases\products;

use App\Ecommerce\Products\Domain\Models\Product;
use App\Ecommerce\Products\Domain\Repository\ProductRepository;
use Illuminate\Http\Request;

class UpdateProduct
{
    public function __construct(private readonly ProductRepository $repository)
    {
    }

    public function run(Request $request, int $productId): Product
    {
        return $this->repository->updateProduct($request,$productId);
    }
}
