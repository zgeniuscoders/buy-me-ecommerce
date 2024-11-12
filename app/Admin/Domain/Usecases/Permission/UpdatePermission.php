<?php

namespace App\Admin\Domain\Usecases\Permission;

use App\Admin\Domain\Repository\PermissionRepository;

readonly class UpdatePermission
{

    public function __construct(
        private PermissionRepository $repository
    )
    {
    }

    public function run(int $permisionId, array $data): \Spatie\Permission\Models\Permission
    {
        return $this->repository->updatePermission($permisionId, $data);
    }

}
