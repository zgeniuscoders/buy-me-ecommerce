<?php

namespace App\Profile\Domain\Usecases\account;

use App\Profile\Domain\Repository\AccountRepository;

readonly class DisableAccount
{

    public function __construct(private AccountRepository $repository)
    {
    }

    public function run(int $userId): void
    {
        $this->repository->disableAccount($userId);
    }

}
