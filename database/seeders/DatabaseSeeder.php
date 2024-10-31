<?php

namespace Database\Seeders;

use App\enums\RoleEnum;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        // User::factory(10)->create();

        User::factory()->create([
            "name" => "admin",
            "email" => "admin@gmail.com",
            "password" => Hash::make("password")
        ])->assignRole(Role::firstWhere('name', RoleEnum::SUPER_ADMIN->value));
    }
}
