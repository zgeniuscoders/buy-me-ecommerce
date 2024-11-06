<?php

namespace App\Http\Controllers\admin\store;

use App\Models\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateShopImageRequest;
use Illuminate\Support\Facades\Storage;

class UpdateShopImageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateShopImageRequest $request)
    {
        $imagePath = "";
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('shops/images', 'public');
        }

        $shopId = $request->user()->store->id;
        $shop = Store::findOrFail($shopId);

        if (Storage::exists($shop->image)) {
            Storage::delete($shop->image);
        }

        $shop->update([
            "image" => $imagePath
        ]);
    }
}
