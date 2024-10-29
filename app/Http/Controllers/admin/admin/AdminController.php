<?php

namespace App\Http\Controllers\admin\admin;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $userCounts = User::all()->count();
        $shops = Store::paginate(10);

        return Inertia::render("admin/admin/admin",[
            "userCounts" => $userCounts,
            "shops" => $shops
        ]);

    }
}
