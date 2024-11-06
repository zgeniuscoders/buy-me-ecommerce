<?php

namespace App\Http\Controllers\admin\store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ShopSettingController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $shop = $request->user()->store;

        return Inertia::render("admin/store/stores/settings", [
            "shop" => $shop,
            "changeShopNameRoute" => route("shop.update.name"),
            "changeShopImageRoute" => route("shop.update.image")
        ]);
    }
}
