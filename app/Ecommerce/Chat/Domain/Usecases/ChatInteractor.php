<?php

namespace App\Ecommerce\Chat\Domain\Usecases;

use App\Ecommerce\Chat\Domain\Repository\ChatRepository;

class ChatInteractor
{

    public function __construct(public GetMessages $getMessages, public RemoveMessage $removeMessage, public SendMessage $sendMessage)
    {
    }

    static function build(ChatRepository $repository): ChatInteractor
    {
        return new ChatInteractor(
            new GetMessages($repository),
            new RemoveMessage($repository),
            new SendMessage($repository)
        );
    }

}
