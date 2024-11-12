<?php

namespace App\Ecommerce\Chat\Framework\Repository;

use App\Ecommerce\Chat\Domain\Repository\ChatRepository;
use App\Models\Chat;
use Illuminate\Database\Eloquent\Collection;


class EloquentChatRepository implements ChatRepository
{

    public function getMessages(int $shopId, int $userId): Collection
    {
        // TODO: Implement getMessages() method.
    }

    public function sendMessage(array $data)
    {
        // TODO: Implement sendMessage() method.
    }

    public function removeMessages(int $messageId): void
    {
        $chat = Chat::findOrFail($messageId);
        $chat->delete();
    }

}
