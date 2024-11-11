<?php

namespace App\Ecommerce\Chat\Domain\Repository;

use Ramsey\Collection\Collection;

interface ChatRepository
{

    public function getMessages(int $userId): Collection;

    public function sendMessage(array $data);

    public function removeMessages(int $messageId): Collection;

}
