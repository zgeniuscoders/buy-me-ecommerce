<?php

namespace App\Ecommerce\Seller\Domain\Usecases;

use App\Ecommerce\Seller\Domain\Repository\ShopRepository;

class EnableShop
{
    public function __construct(private ShopRepository $repository)
    {
    }

    public function run(int $shopId): void
    {
        $this->repository->enableShop($shopId);
    }
}
