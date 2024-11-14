<?php

namespace App\Ecommerce\Products\Framework\Controllers\api\products;

use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Shop\Domain\Models\Store;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TotalProductCount extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): JsonResponse
    {
        $shop = Store::where("user_id", $request->user()->id)->withCount("Products")->firstOrFail();

        return response()->json(["products_count" => $shop->products_count]);
    }
}
