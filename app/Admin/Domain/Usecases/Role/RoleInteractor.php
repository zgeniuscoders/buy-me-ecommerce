<?php

namespace App\Admin\Domain\Usecases\Role;

use App\Admin\Domain\Repository\RoleRepository;

class RoleInteractor
{

    public function __construct(
        public GetRoles   $getRoles,
        public GetRole    $getRole,
        public CreateRole $createRole,
        public UpdateRole $updateRole,
        public RemoveRole $removeRole
    )
    {
    }

    static public function build(RoleRepository $repository): RoleInteractor
    {
        return new RoleInteractor(
            new GetRoles($repository),
            new GetRole($repository),
            new CreateRole($repository),
            new UpdateRole($repository),
            new RemoveRole($repository)
        );
    }

}
