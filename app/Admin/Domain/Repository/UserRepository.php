<?php

namespace App\Admin\Domain\Repository;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

interface UserRepository
{

    public function getUsers(): Collection;

    public function getUser(int $userId): User;

    public function addUser(array $data): User;

    public function removeUser(int $userId): void;

    public function updateUser(int $userId, array $data): User;

}
