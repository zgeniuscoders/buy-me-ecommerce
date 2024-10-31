<?php

namespace Database\Seeders;

use App\enums\RoleEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            "name" => "category-cards.*"
        ]))->assignRole(
            Role::firstWhere("name", RoleEnum::SUPER_ADMIN->value)
        );
    }
}
