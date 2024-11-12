<?php

namespace App\Admin\Domain\Repository;

use Illuminate\Database\Eloquent\Collection;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

interface PermissionRepository
{

    public function assignRole(Role $role,Permission $permission);

    public function getPermissions(): Collection;

    public function getPermission(int $permissionId): Permission;

    public function addPermission(array $data): Permission;

    public function updatePermission(int $permissionId,array $data): Permission;

    public function removePermission(int $permissionId): void;

}
