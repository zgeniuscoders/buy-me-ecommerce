<?php

namespace App\Ecommerce\Products\Domain\Usecases\orders;

use App\Ecommerce\Products\Domain\Models\Order;
use App\Ecommerce\Products\Domain\Repository\OrderRepository;
use Illuminate\Http\Request;

class UpdateOrder
{

    public function __construct(private OrderRepository $repository)
    {
    }

    public function run(Request $request, int $orderId): Order
    {
        return $this->repository->updateOrder($request, $orderId);
    }

}
