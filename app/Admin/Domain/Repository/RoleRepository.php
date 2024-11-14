<?php

namespace App\Admin\Domain\Repository;

use Illuminate\Database\Eloquent\Collection;
use Spatie\Permission\Models\Role;

interface RoleRepository
{
    public function getRoles(): Collection;

    public function getRole(int $roleId): Role;

    public function createRole(array $data): Role;

    public function deleteRole(int $roleId): void;

    public function updateRole(int $roleId, array $data): Role;
}
