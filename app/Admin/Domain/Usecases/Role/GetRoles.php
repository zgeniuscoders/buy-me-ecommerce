<?php

namespace App\Admin\Domain\Usecases\Role;

use App\Admin\Domain\Repository\RoleRepository;
use Illuminate\Database\Eloquent\Collection;

readonly class GetRoles
{

    public function __construct(private RoleRepository $repository)
    {
    }

    public function run(): Collection
    {
        return $this->repository->getRoles();
    }

}
