<?php

namespace App\Chat\Framework\Controllers\api;

use App\Chat\Domain\Usecases\ChatInteractor;
use App\Http\Requests\MessageRequest;
use App\Http\Resources\MessageResource;
use Illuminate\Http\Request;

class ApiMessageController
{

    public function __construct(private ChatInteractor $chatInteractor)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MessageRequest $request): void
    {
        $conversation = $this->chatInteractor->createConversation->run(2, $request->receiverId);
        $this->chatInteractor->sendMessage->run([
            "conversation_id" => $conversation->id,
            "message" => $request->message,
            "sender_id" => 2
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $currentUser = auth()->user()->id;
        $messages = $this->chatInteractor->getMessages->run($currentUser, $id);
        return MessageResource::collection($messages);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
