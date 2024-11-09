<?php

namespace App\Ecommerce\Seller\Framework\Controllers;

use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Seller\Framework\Requests\UpdateShopInfoRequest;
use App\Ecommerce\Shop\Domain\Models\Store;

class ChangeShopInfoController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateShopInfoRequest $request)
    {
        $shopId = $request->user()->store->id;
        $shop = Store::findOrFail($shopId);
        $shop->update($request->all());
    }
}
