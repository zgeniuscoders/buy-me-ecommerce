<?php

namespace App\Http\Controllers\admin\admin;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke()
    {
        $shops = Store::paginate(10);
        return Inertia::render("admin/admin/shop/shop", [
            "shops" => $shops
        ]);
    }
}
