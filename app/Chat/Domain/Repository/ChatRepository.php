<?php

namespace App\Chat\Domain\Repository;


use App\Models\Chat;
use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Database\Eloquent\Collection;

interface ChatRepository
{

    /**
     * @throws \Exception
     */
    public function isGroupParticipant(int $conversationId, int $senderId): Conversation;

    public function getGroupMessages(int $conversationId): Collection;

    public function sendMessage(array $data): Message;

    public function createConversation(int $senderId, int $receiverId): Conversation;

    public function getCustomerChatList(int $shopId): Collection;

    public function getSellerChatList(int $customerId): Collection;

    public function getMessages(int $senderId, int $receiverId): Collection;

    public function deleteMessage(int $messageId): void;

    public function editMessage(int $messageId, array $data): Message;

}
