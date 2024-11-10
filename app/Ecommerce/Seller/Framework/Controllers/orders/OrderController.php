<?php

namespace App\Ecommerce\Seller\Framework\Controllers\orders;

use App\Core\Framework\Controllers\Controller;
use App\Profile\Domain\Models\Order;
use Illuminate\Http\Request;
use Inertia\Inertia;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shopId = 1;
        $orders = Order::whereHas('product', function ($query) use ($shopId) {
            $query->where('store_id', $shopId);
        })->with(["product", "customer"])->get();

        return Inertia::render("admin/store/orders/index", compact("orders"));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
}