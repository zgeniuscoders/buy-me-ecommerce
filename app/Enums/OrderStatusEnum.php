<?php

namespace App\enums;

enum OrderStatusEnum: string
{
    case PANDING = "panding";
    case CANCELED = "canceled";
    case COMPLETED = "completed";
}
