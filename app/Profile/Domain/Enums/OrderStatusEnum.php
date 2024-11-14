<?php

namespace App\Profile\Domain\Enums;

enum OrderStatusEnum: string
{
    case PANDING = "panding";
    case CANCELED = "canceled";
    case COMPLETED = "completed";
}
