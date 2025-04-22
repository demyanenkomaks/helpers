<?php

namespace Maksde\Helpers\Filament\Tables\Columns;

use Filament\Tables\Columns\TextColumn;

class TimeColumn
{
    public static function make(string $name, ?string $label = null, ?string $format = null): TextColumn
    {
        $format = $format ?? config('helpers.format.time');

        return TextColumn::make($name)
            ->label($label)
            ->sortable()
            ->time($format);
    }
}
