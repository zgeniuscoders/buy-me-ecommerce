<?php

namespace App\Http\Controllers\admin\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return Inertia::render("admin/admin/admin");
    }
}
