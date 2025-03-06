<?php

namespace Maksde\Helpers\Filament\Columns;

class CreateUpdateColumns
{
    public static function make(): array
    {
        return [
            TimestampColumn::make('created_at', isToggledHiddenByDefault: true),
            TimestampColumn::make('updated_at', isToggledHiddenByDefault: true),
        ];
    }
}
