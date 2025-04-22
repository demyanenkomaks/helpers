<?php

namespace Maksde\Helpers\Filament\Forms\Components;

use Filament\Forms\Components\TimePicker;

class TimeForm
{
    public static function make(string $name, ?string $label = null, int|string $columnSpan = 1): TimePicker
    {
        return TimePicker::make($name)
            ->label($label)
            ->columnSpan($columnSpan);
    }
}
