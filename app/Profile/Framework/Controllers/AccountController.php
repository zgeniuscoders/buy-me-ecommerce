<?php

namespace App\Profile\Framework\Controllers;

use App\Core\Framework\Controllers\Controller;
use App\Profile\Domain\Models\Order;
use App\Profile\Domain\Usecases\orders\OrderInteractor;
use Inertia\Inertia;
use Inertia\Response;

class AccountController extends Controller
{

    public function __construct(private readonly OrderInteractor $interactor)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function __invoke(): Response
    {

        $hasDefineAddress = auth()
            ->user()
            ->address()
            ->exists();

        $user = auth()->user()->id;
        $propduct = $this->interactor->getUserOrder->run($user);

        return Inertia::render("profile/account/account", [
            "products" => $propduct,
            "hasDefineAddress" => $hasDefineAddress,
            "addAddressRoute" => route("account.address.create")
        ]);
    }

}
