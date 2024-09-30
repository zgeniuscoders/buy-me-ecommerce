<?php

namespace App\Http\Controllers;

use App\Http\Resources\ShopResource;
use App\Models\Store;
use Illuminate\Http\Request;

class SubscribeToShopController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $shop = Store::withCount("subscribers")
            ->with("products")
            ->findOrFail($request->shopId);

        $shop->subscribers()->toggle([
            $request->user->id
        ]);

        return new ShopResource($shop);
    }
}
