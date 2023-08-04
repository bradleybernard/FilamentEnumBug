<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum UserProviderType: int implements HasLabel
{
    case APPLE = 1;
    case GOOGLE = 2;

    public function getLabel(): ?string
    {
        return match ($this) {
            self::APPLE => 'Apple',
            self::GOOGLE => 'Google'
        };
    }
}
