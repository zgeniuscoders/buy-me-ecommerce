<?php

namespace App\Chat\Framework\Controllers;

use App\Chat\Domain\Usecases\ChatInteractor;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ViewMessageController
{

    public function __invoke(Request $request, ChatInteractor $chatInteractor)
    {
        $chatList = $chatInteractor->getSellerChatList->run(auth()->user()->id);
        return Inertia::render("chat/index", compact("chatList"));
    }

}
