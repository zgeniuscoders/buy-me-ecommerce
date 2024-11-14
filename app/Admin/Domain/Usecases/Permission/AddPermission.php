<?php

namespace App\Admin\Domain\Usecases\Permission;

use App\Admin\Domain\Repository\PermissionRepository;

readonly class AddPermission
{
    public function __construct(
        private PermissionRepository $repository
    )
    {
    }

    public function run(array $data): \Spatie\Permission\Models\Permission
    {
        return $this->repository->addPermission($data);
    }
}
