<?php

namespace App\Admin\Framework\Controllers;

use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Shop\Domain\Models\Store;
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
        $shops = Store::get();

        return Inertia::render("admin/admin/admin",[
            "userCounts" => $userCounts,
            "shops" => $shops
        ]);

    }
}
