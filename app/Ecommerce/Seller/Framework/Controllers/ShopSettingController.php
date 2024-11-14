<?php

namespace App\Ecommerce\Seller\Framework\Controllers;


use App\Core\Framework\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ShopSettingController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): \Inertia\Response
    {
        $shop = $request->user()->store;

        if (Auth::user()->cannot('update', $shop)) {
            abort(403);
        }

        return Inertia::render("store/stores/settings", [
            "shop" => $shop,
            "changeShopNameRoute" => route("shop.update.name", ["store" => $shop->id]),
            "changeShopImageRoute" => route("shop.update.image"),
            "deleteShopRoute" => route("shop.delete", ["store" => $shop->id])
        ]);
    }
}
