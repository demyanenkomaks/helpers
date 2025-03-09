<?php

namespace Maksde\Helpers\Filament\Forms\Components;

use Filament\Forms\Components\Toggle;

class BooleanToggleForm
{
    public static function make(string $column, string $label, int|string $columnSpan = 'full'): Toggle
    {
        return Toggle::make($column)
            ->label($label)
            ->onColor('success')
            ->offColor('danger')
            ->columnSpan($columnSpan);
    }
}
