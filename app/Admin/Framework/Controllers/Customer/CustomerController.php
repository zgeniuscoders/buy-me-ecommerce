<?php

namespace App\Admin\Framework\Controllers\Customer;

use App\Admin\Domain\Usecases\Customer\CustomerInteractor;
use App\Core\Framework\Controllers\Controller;
use Inertia\Inertia;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke(CustomerInteractor $customerInteractor)
    {
        $customers = $customerInteractor->getCustomers->run();
        return Inertia::render("admin/customers/index", [
            "customers" => $customers
        ]);
    }
}
