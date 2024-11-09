<?php

namespace App\Core\Domain\Enums;

enum CategoryStatusEnum: string
{
    case AVAILABLE = "available";
    case UNAVAILABLE = "unavailable";
}
