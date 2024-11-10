<?php

namespace App\Ecommerce\Seller\Framework\Controllers;


use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Seller\Framework\Requests\UpdateShopImageRequest;
use App\Ecommerce\Shop\Domain\Models\Store;
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