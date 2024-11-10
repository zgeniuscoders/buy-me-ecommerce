<?php

namespace App\Ecommerce\Seller\Domain\Usecases\shop;

use App\Ecommerce\Seller\Domain\Repository\ShopRepository;

readonly class RemoveShop
{

    public function __construct(private ShopRepository $repository)
    {
    }

    public function run(int $shopId): void
    {
        $this->repository->removeShop($shopId);
    }

}
