<?php

namespace App\Profile\Framework\Repository;

use App\Models\User;
use App\Profile\Domain\Repository\AccountRepository;
use Illuminate\Database\Eloquent\Collection;

class EloquentAccountRepository implements AccountRepository
{

    public function updateAccount(int $userId, array $data): Collection
    {
        $user = User::query()
            ->findOrFail($userId);
        $user->update($data);

        return $user;
    }

    public function deleteAccount(int $userId): void
    {
        $user = User::query()
            ->findOrFail($userId);
        $user->delete();
    }

    public function disableAccount(int $userId): void
    {
        // TODO: Implement disableAccount() method.
    }

    public function createAccount(array $data): Collection
    {
        return User::create($data);
    }
}
