<?php

namespace App\Profile\Domain\Usecases\account;

use App\Profile\Domain\Repository\AccountRepository;

readonly class UpdateAccount
{

    public function __construct(private AccountRepository $repository)
    {
    }

    public function run(int $userId, array $data): \Illuminate\Database\Eloquent\Collection
    {
        return $this->repository->updateAccount($userId, $data);
    }

}
