<?php

namespace App\Http\Controllers\admin\store;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateShopInfoRequest;
use App\Models\Store;
use Illuminate\Http\Request;

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
