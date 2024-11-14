<?php

namespace App\Ecommerce\Shop\Framework\Controllers\api;

use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Shop\Domain\Models\Store;
use App\Http\Resources\ShopResource;
use Illuminate\Http\Request;

class SubscribeToShopController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $shop = Store::withCount("subscribers")
            ->with("Products")
            ->findOrFail($request->shopId);

        $shop->subscribers()->toggle([
            request()->user()->id
        ]);

        return new ShopResource($shop);
    }
}
