<?php

namespace App\Ecommerce\Shop\Framework\Controllers\sellers;


use App\Core\Framework\Controllers\Controller;
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
            "Shop" => $shop,
            "changeShopNameRoute" => route("Shop.update.name"),
            "changeShopImageRoute" => route("Shop.update.image"),
            "deleteShopRoute" => route("Shop.delete")
        ]);
    }
}
