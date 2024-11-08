<?php

namespace App\Profile\Framework\Controllers;

use App\Core\Framework\Controllers\Controller;
use App\Http\Requests\AddressRequest;
use App\Profile\Domain\Models\Address;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AddressController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render("profile/address/create", [
            "addAddressRoute" => route("account.address.store")
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddressRequest $request)
    {
        $user = auth()->user();
        $hasDefineAddress = $user->address()
            ->exists();

        if ($hasDefineAddress) {
            Address::create(array_merge($request->all(), [
                "user_id" => $user->id
            ]));
            return redirect()->route("account.index");
        }

        return redirect()
            ->route("account.index")
            ->with("warning", "vous ne pouvez pas enregistrer plusieures adresse");
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $address = Address::findOrFail($id);
        $address->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $address = Address::findOrFail($id);
        $address->delete();
    }
}
