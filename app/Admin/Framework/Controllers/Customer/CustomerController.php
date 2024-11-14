<?php

namespace App\Admin\Framework\Controllers\Customer;

use App\Core\Framework\Controllers\Controller;
use App\Models\User;
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
