<?php

namespace App\Profile\Domain\Repository;

use Illuminate\Database\Eloquent\Collection;

interface AccountRepository
{

    public function updateAccount(int $userId, array $data): Collection;

    public function deleteAccount(int $userId): void;

    public function disableAccount(int $userId): void;

    public function createAccount(array $data): Collection;

}
