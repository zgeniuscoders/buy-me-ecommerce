<?php

namespace App\Chat\Framework\Controllers;

use App\Chat\Domain\Usecases\ChatInteractor;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SendMessageController
{

    public function __invoke(Request $request, ChatInteractor $chatInteractor): void
    {
        $userId = auth()->user()->id;
        $conversation = $chatInteractor->createConversation->run($userId, $request->receiverId);
        $chatInteractor->sendMessage->run([
            "conversation_id" => $conversation->id,
            "message" => $request->message,
            "sender_id" => $userId
        ]);

    }
}
