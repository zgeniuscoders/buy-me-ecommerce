<?php

namespace App\Admin\Framework\Controllers\shop;

use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Shop\Domain\Models\Store;
use Inertia\Inertia;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke()
    {
        $shops = Store::get();
        return Inertia::render("admin/Shop/Shop", [
            "shops" => $shops
        ]);
    }
}
