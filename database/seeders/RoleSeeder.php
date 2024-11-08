<?php

namespace Database\Seeders;

use App\Admin\Domain\Enums\RoleEnum;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (RoleEnum::cases() as $role) {
            Role::create([
                "name" => $role->value,
            ]);
        }

        (Permission::create([
            "name" => "super-admin-cards.*"
        ]))->assignRole(
            Role::firstWhere("name", RoleEnum::SUPER_ADMIN->value)
        );

        (Permission::create([
            "name" => "admin-cards.*"
        ]))->assignRole(
            Role::firstWhere("name", RoleEnum::ADMIN->value)
        );

        (Permission::create([
            "name" => "user-cards.*"
        ]))->assignRole(
            Role::firstWhere("name", RoleEnum::USER->value)
        );

    }
}
