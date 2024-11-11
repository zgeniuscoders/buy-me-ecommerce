<?php

namespace App\Admin\Domain\Usecases\Role;

use App\Admin\Domain\Repository\RoleRepository;

readonly class GetRole
{

    public function __construct(private RoleRepository $repository)
    {
    }

    public function run(int $roleId): \Spatie\Permission\Models\Role
    {
        return $this->repository->getRole($roleId);
    }

}
