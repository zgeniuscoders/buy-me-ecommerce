<?php

namespace App\Admin\Domain\Usecases\User;

use App\Admin\Domain\Repository\UserRepository;

readonly class RemoveUser
{

    public function __construct(private UserRepository $userRepository)
    {
    }

    public function run(int $userId): void
    {
        $this->userRepository->removeUser($userId);
    }
}
