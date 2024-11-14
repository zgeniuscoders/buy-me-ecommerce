<?php

namespace App\Ecommerce\Seller\Domain\Usecases\Customer;

use App\Ecommerce\Seller\Domain\Repository\ShopCustomerRepository;

class ShopCustomerInteractor
{
    public function __construct(
        public GetShopCustomers $getShopCustomers,
        public GetShopCustomersCount $getShopCustomersCount
    )
    {
    }

    static public function build(ShopCustomerRepository $repository): ShopCustomerInteractor {
        return new ShopCustomerInteractor(
            new GetShopCustomers($repository),
            new GetShopCustomersCount($repository)
        );
    }
}
