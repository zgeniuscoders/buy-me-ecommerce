<?php

namespace App\Ecommerce\Products\Domain\Enums;

enum OrderStatusEnum: string
{
    case PANDING = "panding";
    case CANCELED = "canceled";
    case COMPLETED = "completed";
}
