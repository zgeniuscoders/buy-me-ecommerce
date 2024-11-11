<?php

namespace App\Ecommerce\Seller\Framework\Controllers\chat;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ShopChatController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return Inertia::render("admin/store/chat/index");
    }
}
