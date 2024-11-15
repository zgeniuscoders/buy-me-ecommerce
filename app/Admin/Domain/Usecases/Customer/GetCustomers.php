<?php


namespace App\Admin\Domain\Usecases\Customer;

use App\Admin\Domain\Repository\CustomerRepository;
use Illuminate\Database\Eloquent\Collection;

readonly class GetCustomers
{

    public function __construct(private CustomerRepository $repository)
    {
    }

    public function run(): Collection{
        return $this->repository->getCustomers();
    }

}
