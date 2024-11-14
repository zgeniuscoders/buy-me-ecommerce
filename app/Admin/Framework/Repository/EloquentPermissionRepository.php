<?php

namespace App\Admin\Framework\Repository;

use App\Admin\Domain\Enums\RoleEnum;
use App\Admin\Domain\Repository\PermissionRepository;
use Illuminate\Database\Eloquent\Collection;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class EloquentPermissionRepository implements PermissionRepository
{

    public function getPermissions(): Collection
    {
        return Permission::with("roles")->get();
    }

    public function getPermission(int $permissionId): Permission
    {
        return Permission::findOrFail($permissionId);
    }

    public function addPermission(array $data): Permission
    {
        return Permission::create($data);
    }

    public function updatePermission(int $permissionId, array $data): Permission
    {
        $perms = $this->getPermission($permissionId);
        $perms->update($data);
        return $perms;
    }

    public function removePermission(int $permissionId): void
    {
        $perms = $this->getPermission($permissionId);
        $perms->delete();
    }

    public function assignRole(Role $role, Permission $permission): void
    {
        $permission->assignRole($role);
    }
}
