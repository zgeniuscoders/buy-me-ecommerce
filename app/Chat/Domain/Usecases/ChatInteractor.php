<?php

namespace App\Chat\Domain\Usecases;

use App\Chat\Domain\Repository\ChatRepository;

class ChatInteractor
{

    public function __construct(
        public GetMessages         $getMessages,
        public DeleteMessage       $deleteMessage,
        public EditMessage         $editMessage,
        public GetSellerChatList   $getSellerChatList,
        public GetCustomerChatList $getCustomerChatList,
        public SendMessage         $sendMessage,
        public CreateConversation  $createConversation,
        public GetGroupMessages    $getGroupMessages,
        public IsGroupParticipant  $isGroupParticipant
    )
    {
    }

    static public function build(
        ChatRepository $repository
    ): ChatInteractor
    {
        return new ChatInteractor(
            new GetMessages($repository),
            new DeleteMessage($repository),
            new EditMessage($repository),
            new GetSellerChatList($repository),
            new GetCustomerChatList($repository),
            new SendMessage($repository),
            new CreateConversation($repository),
            new GetGroupMessages($repository),
            new IsGroupParticipant($repository)
        );

    }

}
