<?php

namespace App\Http\Controllers;

use App\Chat\Domain\Usecases\ChatInteractor;
use App\Http\Resources\MessageResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class GetMessageController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, ChatInteractor $chatInteractor): AnonymousResourceCollection
    {
        $currentUser = auth()->user()->id;
        $messages = $chatInteractor->getMessages->run($currentUser, $request->receiverId);
        return MessageResource::collection($messages);
    }
}
