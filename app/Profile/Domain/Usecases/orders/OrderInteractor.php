<?php

namespace App\Profile\Domain\Usecases\orders;

use App\Profile\Domain\Repository\OrderRepository;

class OrderInteractor
{

    public function __construct(
        public AddOrder $addOrder,
        public GetOrder $getOrder,
        public GetUserOrder $getUserOrder,
        public CancelOrder $cancelOrder,
        public MarkAsDelivered $delivered
    )
    {
    }

    static public function build(OrderRepository $orderRepository): OrderInteractor
    {
        return new OrderInteractor(
            new AddOrder($orderRepository),
            new GetOrder($orderRepository),
            new GetUserOrder($orderRepository),
            new CancelOrder($orderRepository),
            new MarkAsDelivered($orderRepository)
        );
    }

}
