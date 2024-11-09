<?php

namespace App\Profile\Framework\Controllers\orders;

use App\Profile\Domain\Usecases\orders\OrderInteractor;
use Illuminate\Http\Request;

class CancelOrderController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, int $id, OrderInteractor $orderInteractor): void
    {
        $order = $orderInteractor->cancelOrder->run($request->orderId);
    }
}
