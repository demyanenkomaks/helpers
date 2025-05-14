<?php

namespace Maksde\Helpers\Filament\Tables\Columns;

use Filament\Tables\Columns\ToggleColumn;

class BooleanToggleColumn
{
    /**
     * @param  string  $name  Название столбеца
     * @param  string|null  $label  Подпись столбца
     * @param  bool  $isToggledHiddenByDefault  Столбец скрыт по умолчанию
     * @return ToggleColumn Столбец переключатель
     */
    public static function make(string $name, ?string $label = null, bool $isToggledHiddenByDefault = false): ToggleColumn
    {
        return ToggleColumn::make($name)
            ->label($label)
            ->onColor('success')
            ->offColor('danger')
            ->toggleable(isToggledHiddenByDefault: $isToggledHiddenByDefault);
    }
}
