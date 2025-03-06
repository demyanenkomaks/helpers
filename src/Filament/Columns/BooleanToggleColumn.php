<?php

namespace Maksde\Helpers\Filament\Columns;

use Filament\Tables\Columns\ToggleColumn;

class BooleanToggleColumn
{
    public static function make(string $column, string $label, bool $isToggledHiddenByDefault = false): ToggleColumn
    {
        return ToggleColumn::make($column)
            ->label($label)
            ->onColor('success')
            ->offColor('danger')
            ->toggleable(isToggledHiddenByDefault: $isToggledHiddenByDefault);
    }
}
