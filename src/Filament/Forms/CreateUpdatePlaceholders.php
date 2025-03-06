<?php

namespace Maksde\Helpers\Filament\Forms;

class CreateUpdatePlaceholders
{
    public static function make(int|string $columnSpan = 1): array
    {
        return [
            TimestampPlaceholder::make('created_at', columnSpan: $columnSpan),
            TimestampPlaceholder::make('updated_at', columnSpan: $columnSpan),
        ];
    }
}
