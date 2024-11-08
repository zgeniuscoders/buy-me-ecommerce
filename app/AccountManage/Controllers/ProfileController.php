<?php

namespace App\AccountManage\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProfileController extends Controller
{
    public function index(Request $request)
    {

        $address = [];
        $user = $request->user();
        $hasDefineAddress = auth()
            ->user()
            ->address()
            ->exists();


        if ($hasDefineAddress) {
            $address = Address::where("user_id", $user->id)->firstOrFail();
        }

        return Inertia::render("profile/profile/profile", [
            "user" => $user,
            "address" => $address,
            "hasDefineAddress" => $hasDefineAddress,
            "addAddressRoute" => route("account.address.create"),
            "updateAddressRoute" => $hasDefineAddress ? route("account.address.update", [
                "address" => $user->address->id
            ]) : ""
        ]);
    }
}
