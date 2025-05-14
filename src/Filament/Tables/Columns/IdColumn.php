<?php

namespace Maksde\Helpers\Filament\Tables\Columns;

use Filament\Tables\Columns\TextColumn;

class IdColumn
{
    /**
     * @param  string|null  $name  Название столбца
     * @param  string|null  $label  Подпись столбца
     * @param  bool  $isToggledHiddenByDefault  Столбец скрыт по умолчанию
     * @return TextColumn Текстовый столбец id
     */
    public static function make(?string $name = 'id', ?string $label = null, bool $isToggledHiddenByDefault = true): TextColumn
    {
        return TextColumn::make($name)
            ->label($label)
            ->sortable()
            ->toggleable(isToggledHiddenByDefault: $isToggledHiddenByDefault);
    }
}
