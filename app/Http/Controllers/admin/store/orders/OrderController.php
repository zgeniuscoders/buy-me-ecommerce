<?php

namespace App\Http\Controllers\admin\store\orders;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Product::with(["orders"])->where("store_id", 1)->get();
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
