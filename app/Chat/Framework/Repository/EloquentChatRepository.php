<?php

namespace App\Chat\Framework\Repository;

use App\Chat\Domain\Repository\ChatRepository;
use App\Models\Conversation;
use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;


class EloquentChatRepository implements ChatRepository
{

    public function createConversation(int $senderId, int $receiverId): Conversation
    {
        $conversation = Conversation::query()
            ->where('is_group', false)
            ->whereHas('users', function ($query) use ($senderId, $receiverId) {
                $query->whereIn('user_id', [$senderId, $receiverId]);
            }, '=', 2)
            ->first();

        if (!$conversation) {
            $conversation = Conversation::create(['name' => null, 'is_group' => false]);
            $conversation->users()->attach([$senderId, $receiverId]);
        }

        return $conversation;
    }

    public function sendMessage(array $data): Message
    {
        return Message::create($data);
    }

    public function getCustomerChatList(int $shopId): Collection
    {
        return Chat::query()
            ->where(function ($query) use ($shopId) {
                $query->where("sender_id", $shopId);
            })->orWhere(function ($query) use ($shopId) {
                $query->where("receiver_id", $shopId);
            });
    }

    public function getSellerChatList(int $customerId): Collection
    {

        $conversations = Conversation::whereHas('users', function ($query) use ($customerId) {
            $query->where('user_id', $customerId);
        })->pluck('id');


        return User::whereHas('conversations', function ($query) use ($conversations) {
            $query->whereIn('conversations.id', $conversations);
        })
            ->where('id', '!=', $customerId) // Exclude the current user
            ->with(['messages' => function ($query) use ($customerId) {
                $query->where(function ($q) use ($customerId) {
                    $q->where('sender_id', $customerId)
                        ->orWhere('sender_id', '!=', $customerId);
                })
                    ->latest('created_at')
                    ->take(1); // Only fetch the latest message
            }])
            ->get();

    }

    public function getMessages(int $senderId, int $receiverId): Collection
    {
        $conversation = Conversation::query()
            ->where('is_group', false)
            ->whereHas('users', function ($query) use ($senderId, $receiverId) {
                $query->whereIn('user_id', [$senderId, $receiverId]);
            }, '=', 2)
            ->first();

        if ($conversation) {
            // Retrieve the messages where either user1 or user2 is the sender or a participant
            $messages = $conversation->messages()
                ->whereIn('sender_id', [$senderId, $receiverId]) // Messages sent by either user1 or user2
                ->orderBy('created_at', 'asc') // Sort messages by the creation time (ascending)
                ->get();
        } else {
            // If no conversation exists, return an empty collection or handle as needed
            $messages = new Collection();
        }

        return $messages;
    }

    /**
     * @throws \Exception
     */
    function isGroupParticipant(int $conversationId, int $senderId): Conversation
    {

        $conversation = Conversation::where('id', $conversationId)
            ->where('is_group', true)
            ->first();

        if (!$conversation) {
            throw new \Exception("Group conversation not found.");
        }

        $isParticipant = $conversation->users()->where('user_id', $senderId)->exists();

        if (!$isParticipant) {
            throw new \Exception("Sender is not a participant in this group.");
        }

        return $conversation;
    }

    function getGroupMessages(int $conversationId): Collection
    {
        $conversation = Conversation::where('id', $conversationId)
            ->where('is_group', true)
            ->first();

        if (!$conversation) {
            return new Collection();
        }

        return $conversation->messages()
            ->with('sender')
            ->orderBy('created_at', 'asc')
            ->get();
    }

    public function deleteMessage(int $messageId): void
    {
        $chat = Message::query()
            ->findOrFail($messageId)
            ->delete();
    }

    public function editMessage(int $messageId, array $data): Message
    {
        $chat = Message::query()
            ->findOrFail($messageId);
        $chat->update($data);
        return $chat;
    }
}
