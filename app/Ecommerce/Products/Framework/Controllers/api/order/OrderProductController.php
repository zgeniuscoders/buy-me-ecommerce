<?php

namespace App\Ecommerce\Products\Framework\Controllers\api\order;

use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Products\Domain\Models\Order;
use App\Ecommerce\Products\Domain\Models\Product;
use Exception;
use Illuminate\Http\Request;

class OrderProductController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        try {

            $en = json_encode($request->data);
            $orderItems = json_decode($en);
            foreach ($orderItems as $orderItem) {
                $product = Product::find($orderItem->productId)->firstOrFail();

                Order::create([
                    "product_id" => $product->id,
                    "user_id" => request()->user()->id,
                    "quantity" => $orderItem->productQty
                ]);
            }

            return response()->json([
                "message" => "success",
            ]);
        } catch (Exception $e) {

            return response()->json([
                "message" => (string) $request,
            ],status: 500);
        }
    }
}
