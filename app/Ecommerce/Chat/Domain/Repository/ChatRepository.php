<?php

namespace App\Ecommerce\Chat\Domain\Repository;


use Illuminate\Database\Eloquent\Collection;

interface ChatRepository
{

    public function getMessages(int $shopId, int $userId): Collection;

    public function sendMessage(array $data);

    public function removeMessages(int $messageId): void;

}
