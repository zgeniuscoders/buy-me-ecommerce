<?php

namespace App\Admin\Framework\Repository;

use App\Admin\Domain\Repository\RoleRepository;
use Illuminate\Database\Eloquent\Collection;
use Spatie\Permission\Models\Role;

class EloquentRoleRepository implements RoleRepository
{

    public function getRoles(): Collection
    {
        return Role::get();
    }

    public function createRole(array $data): Role
    {
        return Role::create($data);
    }

    public function deleteRole(int $roleId): void
    {
        $role = Role::findOrFail($roleId);
        $role->delete();
    }

    public function updateRole(int $roleId, array $data): Role
    {
        $role = Role::findOrFail($roleId);
        $role->update($data);
        return $role;
    }

    public function getRole(int $roleId): Role
    {
        return Role::findOrFail($roleId);
    }
}
