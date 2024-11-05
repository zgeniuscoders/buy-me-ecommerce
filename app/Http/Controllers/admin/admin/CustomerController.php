<?php

namespace App\Http\Controllers\admin\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
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
