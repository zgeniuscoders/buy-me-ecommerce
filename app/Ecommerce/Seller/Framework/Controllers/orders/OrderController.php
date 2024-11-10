<?php

namespace App\Ecommerce\Seller\Framework\Controllers\orders;

use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Seller\Domain\Usecases\order\ShopOrderInteractor;
use App\Profile\Domain\Models\Order;
use Illuminate\Http\Request;
use Inertia\Inertia;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke(Request $request, ShopOrderInteractor $orderInteractor): \Inertia\Response
    {
        $shopId = $request->user()->store->id;
        $orders = $orderInteractor->getShopOrders->run($shopId);
        return Inertia::render("admin/store/orders/index", compact("orders"));
    }

}
