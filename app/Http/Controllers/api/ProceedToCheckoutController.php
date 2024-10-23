<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class ProceedToCheckoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        try {
            foreach ($request->all() as $item) {
                $product = Product::find($item["id"])->firstOrFail();
                $qty = $item["quantity"];

                Order::create([
                    "product_id" => $product->id,
                    "user_id" => auth()->user->id,
                    "quantity" => $qty
                ]);
            }
            return response()->json([
                "data" => [
                    "success" => "success"
                ]
            ]);
        } catch (Exception $e) {
            return response()->json([
                "data" => [
                    "error" => "error"
                ]
            ], 500);
        }
    }
}
