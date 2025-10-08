<?php

namespace Maksde\Helpers\Filament\Resources\Tables\Columns;

use Filament\Tables\Columns\TextColumn;

class DateColumn
{
    /**
     * @param  string  $name  Название столбца
     * @param  string|null  $label  Подпись столбца
     * @param  string|null  $format  Формат отображения даты, дефолтный указан в конфиге
     * @return TextColumn Текстовый столбец даты
     */
    public static function make(string $name, ?string $label = null, ?string $format = null): TextColumn
    {
        $format = $format ?? config('helpers.format.date');

        return TextColumn::make($name)
            ->label($label)
            ->sortable()
            ->date($format);
    }
}
