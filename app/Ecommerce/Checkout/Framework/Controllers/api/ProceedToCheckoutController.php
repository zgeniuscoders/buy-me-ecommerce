<?php

namespace App\Ecommerce\Checkout\Framework\Controllers\api;

use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Products\Domain\Models\Product;
use App\Profile\Domain\Models\Order;
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
