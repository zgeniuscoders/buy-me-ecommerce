<?php

namespace App\Chat\Framework\Controllers;

use App\Chat\Domain\Usecases\ChatInteractor;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SendMessageController
{

    public function __invoke(Request $request, ChatInteractor $chatInteractor): RedirectResponse
    {
        $userId = auth()->user()->id;
        $conversation = $chatInteractor->createConversation->run($userId, $request->receiverId);
        $chatInteractor->sendMessage->run(array_merge(
            $request->all(),
            [
                "conversation_id" => $conversation->id,
                "sender_id" => $userId
            ]
        ));

        return redirect()->back();
    }
}
