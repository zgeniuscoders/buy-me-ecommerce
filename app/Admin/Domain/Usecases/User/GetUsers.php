<?php

namespace App\Admin\Domain\Usecases\User;

use App\Admin\Domain\Repository\UserRepository;

readonly class GetUsers
{

    public function __construct(private UserRepository $userRepository)
    {
    }

    public function run(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->userRepository->getUsers();
    }

}
