<?php

namespace App\Profile\Domain\Repository;

use App\Profile\Domain\Models\Address;
use Illuminate\Database\Eloquent\Collection;

interface AddressRepository
{

    public function getCustomerAddresses(int $customerId): Collection;

    public function addAddress(array $data): Address;

    public function updateAddress(array $data, int $addressId): Address;

}
