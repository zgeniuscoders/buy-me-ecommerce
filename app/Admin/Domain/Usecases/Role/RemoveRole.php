<?php

namespace App\Admin\Domain\Usecases\Role;

use App\Admin\Domain\Repository\RoleRepository;

readonly class RemoveRole
{
    public function __construct(private RoleRepository $repository)
    {
    }

    public function run(int $roleId): void
    {
        $this->repository->deleteRole($roleId);
    }
}
