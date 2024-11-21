<?php

namespace App\Profile\Domain\Usecases\account;

use App\Profile\Domain\Repository\AccountRepository;

class AccountInteractor
{

    public function __construct(
        public DeleteAccount  $deleteAccount,
        public CreateAccount  $createAccount,
        public UpdateAccount  $updateAccount,
        public DisableAccount $disableAccount
    )
    {
    }

    static public function build(AccountRepository $repository): AccountInteractor
    {
        return new AccountInteractor(
            new DeleteAccount($repository),
            new CreateAccount($repository),
            new UpdateAccount($repository,),
            new DisableAccount($repository)
        );
    }

}
