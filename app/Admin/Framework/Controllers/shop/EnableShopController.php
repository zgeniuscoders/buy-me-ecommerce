<?php

namespace App\Admin\Framework\Controllers\shop;


use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Shop\Domain\Models\Store;
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
