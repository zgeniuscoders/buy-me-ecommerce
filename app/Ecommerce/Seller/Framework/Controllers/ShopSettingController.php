<?php

namespace App\Ecommerce\Seller\Framework\Controllers;


use App\Core\Framework\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ShopSettingController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): \Inertia\Response
    {
        $shop = $request->user()->store;

        return Inertia::render("admin/store/stores/settings", [
            "shop" => $shop,
            "changeShopNameRoute" => route("shop.update.name", ["store" => $shop->id]),
            "changeShopImageRoute" => route("shop.update.image"),
            "deleteShopRoute" => route("shop.delete", ["store" => $shop->id])
        ]);
    }
}
