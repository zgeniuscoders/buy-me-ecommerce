<?php

namespace App\Ecommerce\Products\Domain\Usecases\products;

use App\Ecommerce\Products\Domain\Repository\ProductRepository;

readonly class GetProduct
{

    public function __construct(private ProductRepository $repository)
    {
    }

    public function run(int $productId): \App\Ecommerce\Products\Domain\Models\Product
    {
        return $this->repository->getProduct($productId);
    }

}
