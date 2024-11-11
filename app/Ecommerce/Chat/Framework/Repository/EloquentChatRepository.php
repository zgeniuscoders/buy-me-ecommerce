<?php

namespace App\Ecommerce\Chat\Framework\Repository;

use App\Ecommerce\Chat\Domain\Repository\ChatRepository;
use Ramsey\Collection\Collection;

class EloquentChatRepository implements ChatRepository
{

    public function getMessages(int $userId): Collection
    {
        // TODO: Implement getMessages() method.
    }

    public function sendMessage(array $data)
    {
        // TODO: Implement sendMessage() method.
    }

    public function removeMessages(int $messageId): Collection
    {
        // TODO: Implement removeMessages() method.
    }
}
