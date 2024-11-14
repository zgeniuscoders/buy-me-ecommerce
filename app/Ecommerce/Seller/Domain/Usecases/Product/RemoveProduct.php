<?php

namespace App\Ecommerce\Seller\Domain\Usecases\Product;

use App\Ecommerce\Seller\Domain\Repository\ShopProductRepository;

class RemoveProduct
{

    public function __construct(private ShopProductRepository $repository)
    {
    }


    public function run(int $productId): void
    {
        $this->repository->removeProduct($productId);
    }
}
