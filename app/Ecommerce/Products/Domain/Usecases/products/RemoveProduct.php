<?php

namespace App\Ecommerce\Products\Domain\Usecases\products;

use App\Ecommerce\Products\Domain\Repository\ProductRepository;

class RemoveProduct
{

    public function __construct(private ProductRepository $repository)
    {
    }


    public function run(int $productId): void
    {
        $this->repository->removeProduct($productId);
    }
}
