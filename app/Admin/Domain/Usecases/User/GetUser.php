<?php

namespace App\Admin\Domain\Usecases\User;

use App\Admin\Domain\Repository\UserRepository;

readonly class GetUser
{

    public function __construct(private UserRepository $userRepository)
    {
    }

    public function run(int $userId): \App\Models\User
    {
        return $this->userRepository->getUser($userId);
    }

}
