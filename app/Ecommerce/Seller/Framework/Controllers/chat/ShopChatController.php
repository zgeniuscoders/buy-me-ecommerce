<?php

namespace App\Ecommerce\Seller\Framework\Controllers\chat;

use App\Ecommerce\Chat\Domain\Usecases\ChatListInteractor;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ShopChatController
{


    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, ChatListInteractor $chatListInteractor)
    {
        $chatList = $chatListInteractor->getUsersListMessages->run(1);
        return Inertia::render("admin/store/chat/index", compact("chatList"));
    }
}
