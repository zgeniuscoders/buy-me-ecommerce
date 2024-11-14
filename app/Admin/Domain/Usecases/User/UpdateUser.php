<?php

namespace App\Admin\Domain\Usecases\User;

use App\Admin\Domain\Repository\UserRepository;

readonly class UpdateUser
{

    public function __construct(private UserRepository $userRepository)
    {
    }

    public function run(int $userId, array $data): \App\Models\User
    {
        return $this->userRepository->updateUser($userId, $data);
    }

}
