<?php

namespace App\Profile\Framework\Controllers;

use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Products\Domain\Models\Order;
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
            "Products" => $propduct,
            "hasDefineAddress" => $hasDefineAddress,
            "addAddressRoute" => route("account.address.create")
        ]);
    }

}
