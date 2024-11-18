<?php

namespace App\Chat\Domain\Enum;

enum ChatUserStatusEnum: string
{
    case OFFLINE = "hors ligne";
    case ONLINE = "en ligne";
}
