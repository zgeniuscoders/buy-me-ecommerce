<?php

namespace App\Profile\Domain\Enums;

enum AccountStatusEnum: string
{
    case DISABLED = "disabled";
    case ENABLED = "enabled";
}
