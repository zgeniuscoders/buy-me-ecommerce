<?php

namespace App\Admin\Domain\Usecases\Permission;

use App\Admin\Domain\Repository\PermissionRepository;

readonly class RemovePermission
{

    public function __construct(
        private PermissionRepository $repository
    )
    {
    }

    public function run(int $permissionId): void
    {
        $this->repository->removePermission($permissionId);
    }

}
