<?php

namespace App\Ecommerce\Products\Domain\Usecases\orders;

use App\Ecommerce\Products\Domain\Models\Order;
use App\Ecommerce\Products\Domain\Repository\OrderRepository;
use Illuminate\Http\Request;

class AddOrder
{
    public function __construct(private OrderRepository $repository)
    {
    }

    public function run(Request $request): Order
    {
        return $this->repository->addOrder($request);
    }
}
