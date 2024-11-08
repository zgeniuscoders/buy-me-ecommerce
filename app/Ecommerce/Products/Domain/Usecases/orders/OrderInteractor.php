<?php

namespace App\Ecommerce\Products\Domain\Usecases\orders;

use App\Ecommerce\Products\Domain\Repository\OrderRepository;

class OrderInteractor
{

    public function __construct(
        private AddOrder $addOrder,
        private GetOrder $getOrder,
        private GetUserOrder $getUserOrder,
        private UpdateOrder $updateOrder
    )
    {
    }

    static public function build(OrderRepository $orderRepository): OrderInteractor
    {
        return new OrderInteractor(
            new AddOrder($orderRepository),
            new GetOrder($orderRepository),
            new GetUserOrder($orderRepository),
            new UpdateOrder($orderRepository)
        );
    }

}
