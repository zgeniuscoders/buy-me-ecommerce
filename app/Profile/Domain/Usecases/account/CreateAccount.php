<?php

namespace App\Profile\Domain\Usecases\account;

use App\Profile\Domain\Repository\AccountRepository;

readonly class CreateAccount
{


    public function __construct(private AccountRepository $accountRepository)
    {
    }

    public function run(array $data): \Illuminate\Database\Eloquent\Collection
    {
        return $this->accountRepository->createAccount($data);
    }

}
