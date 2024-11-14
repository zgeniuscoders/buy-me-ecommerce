<?php

namespace App\Ecommerce\Seller\Framework\Controllers;

use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Products\Domain\Models\Product;
use App\Ecommerce\Seller\Domain\Usecases\Customer\ShopCustomerInteractor;
use App\Ecommerce\Seller\Domain\Usecases\order\ShopOrderInteractor;
use App\Ecommerce\Seller\Domain\Usecases\shop\ShopInteractor;
use App\Models\User;
use App\Profile\Domain\Models\Order;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(
        Request             $request,
        ShopInteractor      $shopInteractor,
        ShopOrderInteractor $orderInteractor,
        ShopCustomerInteractor $customerInteractor
    ): \Inertia\Response
    {

        $shopId = $request->user()->store->id;

        $totalOrdersPrice = $orderInteractor->getShopTotalOrdersPrice->run($shopId);

        $products = Product::withCount("orders")
            ->where('store_id', $shopId)
            ->get();


        $orders = $orderInteractor->getShopOrders->run($shopId);
        $totalCustomers = $customerInteractor->getShopCustomersCount->run($shopId);


        return Inertia::render("admin/home", [
            "totalOrdersPrice" => number_format($totalOrdersPrice, 2, ','),
            "products" => $products,
            "totalCustomers" => $totalCustomers,
            "orders" => $orders
        ]);
    }
}
