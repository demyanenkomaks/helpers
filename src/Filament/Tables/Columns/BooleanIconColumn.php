<?php

namespace Maksde\Helpers\Filament\Tables\Columns;

use Filament\Tables\Columns\IconColumn;

class BooleanIconColumn
{
    public static function make(string $column, string $label, bool $isToggledHiddenByDefault = true): IconColumn
    {
        return IconColumn::make($column)
            ->label($label)
            ->sortable()
            ->boolean()
            ->toggleable(isToggledHiddenByDefault: $isToggledHiddenByDefault);
    }
}
