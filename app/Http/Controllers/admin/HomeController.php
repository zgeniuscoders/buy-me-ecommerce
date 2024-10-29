<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $shopId = 1;

        $totalOrdersPrice = Order::whereHas('product', function ($query) use ($shopId) {
            $query->where('store_id', $shopId);
        })->with('product')->get()->sum(function ($order) {
            return $order->product->price * $order->quantity;
        });

        $orderCounts = Product::withCount("orders")
            ->where('store_id', $shopId)
            ->firstOrFail()
            ->orders_count;

        $totalCustomers = User::whereHas('orders.product', function ($query) use ($shopId) {
            $query->where('store_id', $shopId);
        })
            ->distinct()
            ->count();


        return Inertia::render("admin/home", [
            "totalOrdersPrice" => number_format($totalOrdersPrice, 2, ','),
            "totalOrders" => $orderCounts,
            "totalCustomers" => $totalCustomers,
        ]);
    }
}
