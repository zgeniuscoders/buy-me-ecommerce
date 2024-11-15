<?php

namespace App\Profile\Domain\Usecases;

use App\Profile\Domain\Repository\AddressRepository;
use Illuminate\Database\Eloquent\Collection;

readonly class GetCustomerAddresses
{

    public function __construct(private AddressRepository $repository)
    {

    }

    public function run(int $customerId): Collection
    {
        return $this->repository->getCustomerAddresses($customerId);
    }

}
