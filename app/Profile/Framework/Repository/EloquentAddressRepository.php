<?php

namespace App\Profile\Framework\Repository;

use App\Profile\Domain\Models\Address;
use App\Profile\Domain\Repository\AddressRepository;
use Illuminate\Database\Eloquent\Collection;

class EloquentAddressRepository implements AddressRepository
{

    public function getCustomerAddresses(int $customerId): Collection
    {
        return Address::with("customer")
            ->where("user_id", $customerId)
            ->get();
    }

    public function addAddress(array $data): Address
    {
        return Address::create($data);
    }

    public function updateAddress(array $data, int $addressId): Address
    {
        $address = Address::findOrFail($data);
        $address->update($data);
        return $address;
    }
}
