<?php

use App\Models\Conversation;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int)$user->id === (int)$id;
});

Broadcast::channel('messages.{id}', function ($user, $id) {
    return Conversation::where('id', $id)
        ->whereHas('users', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->exists();
});
