<?php

namespace App\Admin\Framework\Repository;

use App\Admin\Domain\Repository\UserRepository;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class EloquentUserRepository implements UserRepository
{

    public function getUsers(): Collection
    {
        return User::with("roles")->get();
    }

    public function getUser(int $userId): User
    {
        return User::with("roles")->findOrFail($userId);
    }

    public function addUser(array $data): User
    {
        return User::create($data);
    }

    public function removeUser(int $userId): void
    {
        $user = User::findOrFail($userId);
        $user->delete();
    }

    public function updateUser(int $userId, array $data): User
    {
        $user = User::findOrFail($userId);
        $user->update($data);
        return $user;
    }
}
