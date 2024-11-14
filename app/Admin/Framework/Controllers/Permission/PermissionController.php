<?php

namespace App\Admin\Framework\Controllers\Permission;

use App\Admin\Domain\Usecases\Permission\PermissionInteractor;
use App\Admin\Domain\Usecases\Role\RoleInteractor;
use App\Http\Requests\PermissionRequest;
use Inertia\Inertia;

class PermissionController
{
    public function __construct(public PermissionInteractor $permissionInteractor,
                                public RoleInteractor       $roleInteractor)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): \Inertia\Response
    {
        $permissions = $this->permissionInteractor->getPermissions->run();
        return Inertia::render("admin/permission/index", [
            "permissions" => $permissions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Inertia\Response
    {
        $roles = $this->roleInteractor->getRoles->run();
        $addPermissionRoute = route("admin.permissions.store");

        return Inertia::render("admin/permission/create", [
            "roles" => $roles,
            "addPermissionRoute" => $addPermissionRoute
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PermissionRequest $request): \Illuminate\Http\RedirectResponse
    {
        $this->permissionInteractor->addPermission->run($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $this->permissionInteractor->getPermission->run($id);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): \Inertia\Response
    {
        $perms = $this->permissionInteractor->getPermission->run($id);
        $roles = $this->roleInteractor->getRoles->run();
        $updatePermissionRoute = route("admin.permissions.update", ["permission" => $perms->id]);

        return Inertia::render("admin/permission/edit", [
            "permission" => $perms,
            "roles" => $roles,
            "updatePermissionRoute" => $updatePermissionRoute
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PermissionRequest $request, string $id): \Illuminate\Http\RedirectResponse
    {
        $this->permissionInteractor->updatePermission->run($id, $request->all());
        return redirect()->route("admin.permissions.index");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): \Illuminate\Http\RedirectResponse
    {
        $this->permissionInteractor->deletePermission->run($id);
        return redirect()->route("admin.permissions.index");
    }
}
