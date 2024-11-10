<?php

namespace App\Core\Domain\Enums;

enum StatusEnum: string
{
    case DRAFT = 'draft';
    case PUBLISH = 'publish';
}
