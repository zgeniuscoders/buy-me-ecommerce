<?php

namespace App\Admin\Framework\Controllers\Profile;

use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AdminProfileController
{

    public function __invoke()
    {
        $user = Auth::user();
        return Inertia::render("admin/profile/index", compact("user"));
    }

}
