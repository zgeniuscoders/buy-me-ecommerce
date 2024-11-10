<?php

namespace App\Ecommerce\Seller\Domain\Usecases\Customer;

use App\Ecommerce\Seller\Domain\Repository\ShopCustomerRepository;
use Illuminate\Database\Eloquent\Collection;

readonly class GetShopCustomersCount
{

    public function __construct(private ShopCustomerRepository $repository)
    {
    }

    public function run(int $shopId): int
    {
        return $this->repository->getShopCustomersCount($shopId);  // Assuming the method exists in the ShopCustomerRepository interface.
    }
}
