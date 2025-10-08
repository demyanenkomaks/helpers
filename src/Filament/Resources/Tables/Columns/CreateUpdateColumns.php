<?php

namespace Maksde\Helpers\Filament\Resources\Tables\Columns;

class CreateUpdateColumns
{
    /**
     * @return array Массив столбцов Добавлена и Отредактирована
     */
    public static function make(): array
    {
        return [
            TimestampColumn::make('created_at', isToggledHiddenByDefault: true),
            TimestampColumn::make('updated_at', isToggledHiddenByDefault: true),
        ];
    }
}
