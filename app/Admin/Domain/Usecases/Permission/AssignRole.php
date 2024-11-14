<?php

namespace App\Admin\Domain\Usecases\Permission;

use App\Admin\Domain\Repository\PermissionRepository;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

readonly class AssignRole
{

    public function __construct(
        private PermissionRepository $repository
    )
    {
    }

    public function run(Role $role, Permission $permission)
    {
        return $this->repository->assignRole($role, $permission);
    }

}
