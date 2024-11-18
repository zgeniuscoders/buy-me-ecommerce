<?php

namespace App\Chat\Domain\Enum;

enum ChatUserRoleEnum: string
{
    case ADMIN = "admin";
    case MEMBER = "membre";

}
