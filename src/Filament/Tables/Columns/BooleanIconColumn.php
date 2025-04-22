<?php

namespace Maksde\Helpers\Filament\Tables\Columns;

use Filament\Tables\Columns\IconColumn;

class BooleanIconColumn
{
    public static function make(string $name, ?string $label = null, bool $isToggledHiddenByDefault = false): IconColumn
    {
        return IconColumn::make($name)
            ->label($label)
            ->sortable()
            ->boolean()
            ->toggleable(isToggledHiddenByDefault: $isToggledHiddenByDefault);
    }
}
