<?php

namespace App\Core\Domain\Enums;

enum StatusEnum: string
{
    case DRAFT = 'brouillons';
    case PUBLISH = 'publier';
}
