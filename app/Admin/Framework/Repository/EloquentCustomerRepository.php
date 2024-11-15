<?php

namespace App\Admin\Framework\Repository;

use App\Admin\Domain\Enums\RoleEnum;
use App\Admin\Domain\Repository\CustomerRepository;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class EloquentCustomerRepository implements CustomerRepository
{

    public function getCustomers(): Collection
    {
        return User::with("roles")
            ->whereHas("roles", function ($query) {
                $query->where("name", RoleEnum::USER->name);
            })->get();
    }
}
