<?php

namespace App\Http\Controllers\api\product;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TotalProductCount extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): JsonResponse
    {
        $shop = Store::where("user_id", $request->user()->id)->withCount("products")->firstOrFail();

        return response()->json(["products_count" => $shop->products_count]);
    }
}
