<?php

namespace App\Admin\Domain\Usecases\Permission;

use App\Admin\Domain\Repository\PermissionRepository;

readonly class GetPermissions
{
    public function __construct(
        private PermissionRepository $repository
    )
    {
    }

    public function run(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->repository->getPermissions();
    }
}
