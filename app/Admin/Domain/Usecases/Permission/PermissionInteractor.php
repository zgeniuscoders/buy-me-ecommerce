<?php

namespace App\Admin\Domain\Usecases\Permission;

use App\Admin\Domain\Repository\PermissionRepository;

class PermissionInteractor
{

    public function __construct(
        public GetPermission    $getPermission,
        public GetPermissions   $getPermissions,
        public AddPermission    $addPermission,
        public UpdatePermission $updatePermission,
        public RemovePermission $deletePermission,
        public AssignRole       $assignRole,
    )
    {
    }

    static function build(PermissionRepository $repository): PermissionInteractor
    {
        return new PermissionInteractor(
            new GetPermission($repository),
            new GetPermissions($repository),
            new AddPermission($repository),
            new UpdatePermission($repository),
            new RemovePermission($repository),
            new AssignRole($repository)
        );
    }

}
