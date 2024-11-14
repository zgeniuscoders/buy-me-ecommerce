<?php

namespace App\Admin\Domain\Enums;

enum RoleEnum: string
{
    case SUPER_ADMIN = "super_admin";
    case ADMIN = "admin";
    case USER = "user";
}
