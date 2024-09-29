<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TotalOrderCountController extends Controller
{

    public function __invoke(Request $request): JsonResponse
    {
        $storeId = $request->user()->store->id;

        $products = Product::withCount(["orders"])->where("store_id", $storeId)->get();

        $orders_count = 0;
        foreach ($products as $product) {
            $orders_count += $product->orders_count;
        }

        return response()->json([
            "status" => true,
            "orders_count" => $orders_count,
        ]);
    }
}
