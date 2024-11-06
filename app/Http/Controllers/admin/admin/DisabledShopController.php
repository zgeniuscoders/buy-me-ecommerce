<?php

namespace App\Http\Controllers\admin\admin;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;

class DisabledShopController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $storeId = $request->shopId;

        $store = Store::findOrFail($storeId);
        $store->update([
            "is_disabled" => true
        ]);

        return redirect()->back();
    }
}
