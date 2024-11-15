<?php

namespace App\Admin\Domain\Repository;

use Illuminate\Database\Eloquent\Collection;

interface CustomerRepository
{

    public function getCustomers(): Collection;

}
