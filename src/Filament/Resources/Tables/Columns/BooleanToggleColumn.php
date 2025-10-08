<?php

namespace Maksde\Helpers\Filament\Resources\Tables\Columns;

use Filament\Tables\Columns\ToggleColumn;

class BooleanToggleColumn
{
    /**
     * @param  string  $name  Название столбца
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
