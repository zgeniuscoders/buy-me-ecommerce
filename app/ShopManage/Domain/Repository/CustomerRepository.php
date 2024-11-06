<?php

namespace App\ShopManage\Domain\Repository;

interface CustomerRepository
{
    public function getCustomers(string $shopId);
}
