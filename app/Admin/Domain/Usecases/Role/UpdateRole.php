<?php

namespace App\Admin\Domain\Usecases\Role;

use App\Admin\Domain\Repository\RoleRepository;

readonly class UpdateRole
{
    public function __construct(private RoleRepository $repository)
    {
    }

    public function run(int $roleId,array $data): \Spatie\Permission\Models\Role
    {
        return $this->repository->updateRole($roleId,$data);
    }

}
