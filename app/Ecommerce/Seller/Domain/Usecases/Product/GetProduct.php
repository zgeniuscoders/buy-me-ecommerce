<?php

namespace App\Ecommerce\Seller\Domain\Usecases\Product;

use App\Ecommerce\Products\Domain\Models\Product;
use App\Ecommerce\Seller\Domain\Repository\ShopProductRepository;
use Illuminate\Database\Eloquent\Collection;

class GetProduct
{

    public function __construct(private ShopProductRepository $repository)
    {
    }

    public function run(int $productId): Product
    {
        return $this->repository->getProduct($productId);
    }

}
