<?php

namespace App\Chat\Domain\Enum;

enum ChatSenderTypeEnum: string
{

    case SHOP = "boutique";
    case ADMIN = "administracteur";
    case USER = "utilisateur";

}
