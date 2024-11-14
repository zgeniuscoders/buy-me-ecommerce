<?php

namespace App\Admin\Domain\Usecases\Permission;

use App\Admin\Domain\Repository\PermissionRepository;

readonly class GetPermission
{

    public function __construct(
        private PermissionRepository $repository
    )
    {
    }

    public function run(int $permissionId): \Spatie\Permission\Models\Permission
    {
        return $this->repository->getPermission($permissionId);
    }

}
