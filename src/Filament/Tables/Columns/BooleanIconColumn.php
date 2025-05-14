<?php

namespace Maksde\Helpers\Filament\Tables\Columns;

use Filament\Tables\Columns\IconColumn;

class BooleanIconColumn
{
    /**
     * @param  string  $name  Название столбеца
     * @param  string|null  $label  Подпись столбца
     * @param  bool  $isToggledHiddenByDefault  Столбец скрыт по умолчанию
     * @return IconColumn Столбец со значком
     */
    public static function make(string $name, ?string $label = null, bool $isToggledHiddenByDefault = false): IconColumn
    {
        return IconColumn::make($name)
            ->label($label)
            ->sortable()
            ->boolean()
            ->toggleable(isToggledHiddenByDefault: $isToggledHiddenByDefault);
    }
}
