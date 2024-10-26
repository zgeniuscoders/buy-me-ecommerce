<?php

namespace App\enums;

enum CategoryStatusEnum: string
{
    case PANDING = "panding";
    case CANCELED = "canceled";
    case DELIVERED = "delivered";
}
