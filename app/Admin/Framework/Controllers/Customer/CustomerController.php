<?php

namespace App\Admin\Framework\Controllers\Customer;

use App\Core\Domain\Models\User;
use App\Core\Framework\Controllers\Controller;
use Inertia\Inertia;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke()
    {
        $users = User::all();
        return Inertia::render("admin/admin/customers/customers", [
            "customers" => $users
        ]);
    }
}
