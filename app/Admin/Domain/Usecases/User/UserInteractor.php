<?php

namespace App\Admin\Domain\Usecases\User;

use App\Admin\Domain\Repository\UserRepository;

class UserInteractor
{

    public function __construct(
        public GetUser    $getUser,
        public GetUsers   $getUsers,
        public AddUser    $addUser,
        public RemoveUser $removeUser,
        public UpdateUser $updateUser
    )
    {
    }

    static public function build(UserRepository $repository): UserInteractor
    {
        return new UserInteractor(
            new GetUser($repository),
            new GetUsers($repository),
            new AddUser($repository),
            new RemoveUser($repository),
            new UpdateUser($repository)
        );

    }

}
