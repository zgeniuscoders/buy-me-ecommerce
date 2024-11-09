<?php

namespace App\Admin\Framework\Controllers\User;

use App\Core\Framework\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Profile\Domain\Enums\AccountStatusEnum;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10);
        return Inertia::render("admin/admin/users/users", [
            "users" => $users
        ]);
    }

    public function create()
    {
        $status = [
            ['id' => 1, 'name' => AccountStatusEnum::DISABLED->value],
            ['id' => 2, 'name' => AccountStatusEnum::ENABLED->value]
        ];

        return Inertia::render("admin/admin/users/create", [
            "status" => $status
        ]);
    }

    public function edit(string $id)
    {
        $user = User::find($id);
        $status = [
            ['id' => 1, 'name' => AccountStatusEnum::DISABLED->value],
            ['id' => 2, 'name' => AccountStatusEnum::ENABLED->value]
        ];

        return Inertia::render("admin/admin/users/edit", [
            "status" => $status,
            "user" => $user
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $user = User::create($request->all());
        return redirect()->back();
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
