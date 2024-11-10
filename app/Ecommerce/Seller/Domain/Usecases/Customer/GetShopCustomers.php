<?php

namespace App\Ecommerce\Seller\Domain\Usecases\Customer;

use App\Ecommerce\Seller\Domain\Repository\ShopCustomerRepository;
use Illuminate\Database\Eloquent\Collection;

readonly class GetShopCustomers
{

    public function __construct(private ShopCustomerRepository $repository)
    {
    }

    public function run(int $shopId): Collection {
        return $this->repository->getShopCustomers($shopId);  // Assuming the method exists in the ShopCustomerRepository interface.
    }
}
