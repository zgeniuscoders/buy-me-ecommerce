<?php

namespace App\Ecommerce\Chat\Domain\Usecases;

use App\Ecommerce\Chat\Domain\Repository\ChatListRepository;
use App\Ecommerce\Chat\Domain\Repository\ChatRepository;

class ChatListInteractor
{

    public function __construct(
        public GetUsersListMessages $getUsersListMessages,
        public GetShopsListMessages $getShopsListMessages
    )
    {
    }

    static function build(ChatListRepository $repository): ChatListInteractor
    {
        return new ChatListInteractor(
            new GetUsersListMessages($repository),
            new GetShopsListMessages($repository)
        );
    }

}
