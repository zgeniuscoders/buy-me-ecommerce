<?php

namespace App\Http\Controllers;

use App\Profile\Domain\Usecases\orders\OrderInteractor;
use Illuminate\Http\Request;

class MarkAsDeliveredOrderController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, int $id, OrderInteractor $orderInteractor): void
    {
        $orderInteractor->delivered->run($request->orderId);
    }
}
