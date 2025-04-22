<?php

namespace Maksde\Helpers\Filament\Tables\Columns;

use Filament\Tables\Columns\TextColumn;

class IdColumn
{
    public static function make(?string $name = 'id', ?string $label = null, bool $isToggledHiddenByDefault = true): TextColumn
    {
        return TextColumn::make($name)
            ->label($label)
            ->sortable()
            ->toggleable(isToggledHiddenByDefault: $isToggledHiddenByDefault);
    }
}
