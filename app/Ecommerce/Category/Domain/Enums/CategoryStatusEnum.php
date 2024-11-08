<?php

namespace App\Ecommerce\Category\Domain\Enums;

enum CategoryStatusEnum: string
{
    case AVAILABLE = "available";
    case UNAVAILABLE = "unavailable";
}
