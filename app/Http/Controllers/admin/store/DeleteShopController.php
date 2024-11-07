<?php

namespace App\Http\Controllers\admin\store;

use App\Models\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
