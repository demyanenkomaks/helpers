<?php

namespace Maksde\Helpers\Filament\Forms\Components;

use Filament\Forms\Components\Toggle;

class BooleanToggleForm
{
    public static function make(string $name, ?string $label = null, int|string $columnSpan = 'full'): Toggle
    {
        return Toggle::make($name)
            ->label($label)
            ->onColor('success')
            ->offColor('danger')
            ->columnSpan($columnSpan);
    }
}
