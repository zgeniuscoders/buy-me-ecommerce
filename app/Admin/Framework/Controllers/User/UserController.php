<?php

namespace App\Admin\Framework\Controllers\User;

use App\Admin\Domain\Usecases\Role\RoleInteractor;
use App\Admin\Domain\Usecases\User\UserInteractor;
use App\Core\Framework\Controllers\Controller;
use App\Http\Requests\UpdateUserRoleRequest;
use App\Http\Requests\UserRequest;
use App\Profile\Domain\Enums\AccountStatusEnum;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{

    public function __construct(
        private readonly UserInteractor $userInteractor,
        private readonly RoleInteractor $roleInteractor
    )
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): \Inertia\Response
    {
        $users = $this->userInteractor->getUsers->run();
        $createUserRoute = route("admin.users.create");

        return Inertia::render("admin/admin/users/index", [
            "users" => $users,
            "createUserRoute" => $createUserRoute
        ]);
    }

    public function create(): \Inertia\Response
    {
        $status = [
            ['id' => 1, 'name' => AccountStatusEnum::DISABLED->value],
            ['id' => 2, 'name' => AccountStatusEnum::ENABLED->value]
        ];

        $createUserRoute = route("admin.users.store");
        $roles = $this->roleInteractor->getRoles->run();

        return Inertia::render("admin/admin/users/create", [
            "status" => $status,
            "createUserRoute" => $createUserRoute,
            "roles" => $roles
        ]);
    }

    public function edit(string $id): \Inertia\Response
    {
        $user = $this->userInteractor->getUser->run($id);
        $roles = $this->roleInteractor->getRoles->run();

        $status = [
            ['id' => 1, 'name' => AccountStatusEnum::DISABLED->value],
            ['id' => 2, 'name' => AccountStatusEnum::ENABLED->value]
        ];

        $updateUserRoute = route("admin.users.update", ["utilisateur" => $user->id]);
        return Inertia::render("admin/admin/users/edit", [
            "status" => $status,
            "user" => $user,
            "roles" => $roles,
            "updateUserRoute" => $updateUserRoute
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request): \Illuminate\Http\RedirectResponse
    {
        $user = $this->userInteractor->addUser->run($request->all());
        $role = $this->roleInteractor->getRole->run($request->roles);


        return redirect()->back();
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRoleRequest $request, string $id): \Illuminate\Http\RedirectResponse
    {
        $role = $this->roleInteractor->getRole->run($request->roles);
        $user = $this->userInteractor->updateUser->run($id, $request->all());

        $user->assignRole($role);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): \Illuminate\Http\RedirectResponse
    {
        $this->userInteractor->removeUser->run($id);
        return redirect()->back();
    }
}
