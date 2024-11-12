<?php

namespace App\Admin\Domain\Usecases\User;

use App\Admin\Domain\Repository\UserRepository;

readonly class AddUser
{

    public function __construct(private UserRepository $userRepository)
    {
    }

    public function run(array $data): \App\Models\User
    {
        return $this->userRepository->addUser($data);
    }
}
