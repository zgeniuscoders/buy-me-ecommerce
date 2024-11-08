<?php

namespace App\Ecommerce\Shop\Framework\Controllers\sellers;

use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Shop\Domain\Models\Store;
use App\Http\Requests\UpdateShopInfoRequest;

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
