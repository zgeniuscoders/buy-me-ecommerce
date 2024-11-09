<?php

namespace App\Ecommerce\Seller\Framework\Controllers;

use App\Core\Domain\Models\User;
use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Products\Domain\Models\Order;
use App\Ecommerce\Products\Domain\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $shopId = $request->user()->store->id;

        $totalOrdersPrice = Order::whereHas('product', function ($query) use ($shopId) {
            $query->where('store_id', $shopId);
        })->with('product')->get()->sum(function ($order) {
            return $order->product->price * $order->quantity;
        });

        $products = Product::withCount("orders")
            ->where('store_id', $shopId)
            ->get();


        $shopId = 1;
        $orders = Order::whereHas('product', function ($query) use ($shopId) {
            $query->where('store_id', $shopId);
        })->with(["product", "customer"])->get();


        $totalCustomers = User::whereHas('orders.product', function ($query) use ($shopId) {
            $query->where('store_id', $shopId);
        })
            ->distinct()
            ->count();


        return Inertia::render("admin/home", [
            "totalOrdersPrice" => number_format($totalOrdersPrice, 2, ','),
            "Products" => $products,
            "totalCustomers" => $totalCustomers,
            "orders" => $orders
        ]);
    }
}
