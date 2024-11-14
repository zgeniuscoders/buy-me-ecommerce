<?php

namespace App\Admin\Domain\Usecases\Role;

use App\Admin\Domain\Repository\RoleRepository;

readonly class CreateRole
{

    public function __construct(private readonly RoleRepository $repository)
    {
    }

    public function run(array $data): \Spatie\Permission\Models\Role
    {
        return $this->repository->createRole($data);
    }

}
