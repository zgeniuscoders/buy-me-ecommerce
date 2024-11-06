<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopDisabledController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        dd("votre boutique a ete desactiver, veuillez contacter les adminstrateur si vous en savoir plus");
    }
}
