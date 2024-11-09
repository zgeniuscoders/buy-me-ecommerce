<?php

namespace App\Ecommerce\Seller\Framework\Controllers;

use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Shop\Domain\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DeleteShopController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $shopId = $request->user()->store->id;

        $shop = Store::findOrFail($shopId);

        if (Storage::exists($shop->image)) {
            Storage::delete($shop->image);
        }

        $shop->delete();
    }
}
