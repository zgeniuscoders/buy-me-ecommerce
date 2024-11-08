<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class EnableShopController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $storeId = $request->shopId;

        $store = Store::findOrFail($storeId);
        $store->update([
            "is_disabled" => false
        ]);

    }
}
