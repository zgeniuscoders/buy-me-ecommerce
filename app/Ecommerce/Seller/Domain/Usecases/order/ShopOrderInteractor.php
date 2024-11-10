<?php

namespace App\Ecommerce\Seller\Domain\Usecases\order;

use App\Ecommerce\Seller\Domain\Repository\ShopOrderRepository;

class ShopOrderInteractor
{

    public function __construct(public GetShopOrders $getShopOrders)
    {
    }

    static public function build(ShopOrderRepository $repository): ShopOrderInteractor
    {
        return new ShopOrderInteractor(
            new GetShopOrders($repository)
        );
    }

}
