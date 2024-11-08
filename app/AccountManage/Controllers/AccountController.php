<?php

namespace App\AccountManage\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke()
    {

        $hasDefineAddress = auth()
            ->user()
            ->address()
            ->exists();

        $propduct = Order::where("user_id", auth()->user()->id)
            ->with(["product", "product.store"])
            ->get();

        return Inertia::render("profile/account/account", [
            "products" => $propduct,
            "hasDefineAddress" => $hasDefineAddress,
            "addAddressRoute" => route("account.address.create")
        ]);
    }

}
