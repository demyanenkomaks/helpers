<?php

namespace Maksde\Helpers\Filament\Forms\Components;

use Filament\Forms\Components\DatePicker;

class DateForm
{
    public static function make(string $name, ?string $label = null, int|string $columnSpan = 1): DatePicker
    {
        return DatePicker::make($name)
            ->label($label)
            ->minDate('1000-01-01')
            ->maxDate('9999-12-31')
            ->columnSpan($columnSpan);
    }
}
