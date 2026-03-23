<?php

declare(strict_types=1);

namespace Maksde\Helpers\Filament\Resources\Tables\Columns;

use Filament\Tables\Columns\TextColumn;

class CreateUpdateColumns
{
    /**
     * @return list<TextColumn> Столбцы «Добавлена» и «Отредактирована»
     */
    public static function make(): array
    {
        return [
            TimestampColumn::make('created_at', isToggledHiddenByDefault: true),
            TimestampColumn::make('updated_at', isToggledHiddenByDefault: true),
        ];
    }
}
