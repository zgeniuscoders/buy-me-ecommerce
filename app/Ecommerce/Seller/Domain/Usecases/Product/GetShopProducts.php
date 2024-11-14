<?php

namespace App\Ecommerce\Seller\Domain\Usecases\Product;

use App\Ecommerce\Seller\Domain\Repository\ShopProductRepository;
use Illuminate\Database\Eloquent\Collection;


readonly class GetShopProducts
{
    public function __construct(private ShopProductRepository $repository)
    {
    }

    public function run(int $shopId): Collection
    {
        return $this->repository->getShopProduct($shopId);
    }
}
