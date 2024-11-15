<?php

namespace App\Admin\Framework\Controllers\Role;

use App\Admin\Domain\Usecases\Role\RoleInteractor;
use App\Http\Requests\RoleRequest;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class RoleController
{
    public function __construct(public RoleInteractor $roleInteractor)
    {
    }

    public function index(): Response
    {
        $roles = $this->roleInteractor->getRoles->run();
        return Inertia::render("admin/role/index", [
            "roles" => $roles
        ]);
    }

    public function create(): Response
    {
        $createRoleRoute = route("admin.roles.store");
        return Inertia::render("admin/role/create", compact("createRoleRoute"));
    }

    public function store(RoleRequest $request): RedirectResponse
    {
        $this->roleInteractor->createRole->run($request->all());
        return redirect()->route("admin.roles.index");
    }

    public function edit(int $id): Response
    {
        $role = $this->roleInteractor->getRole->run($id);
        $updateRoleRoute = route("admin.roles.update", ["role" => $role->id]);

        return Inertia::render("admin/role/edit", compact("updateRoleRoute", "role"));
    }

    public function update(RoleRequest $request, int $id): RedirectResponse
    {
        $role = $this->roleInteractor->updateRole->run($id, $request->all());
        return redirect()->route("admin.roles.index");
    }

    public function destroy(int $id): RedirectResponse
    {
        $this->roleInteractor->removeRole->run($id);
        return redirect()->route("admin.roles.index");
    }
}
