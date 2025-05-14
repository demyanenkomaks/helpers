<?php

namespace Maksde\Helpers\Filament\Tables\Columns;

use Filament\Tables\Columns\TextColumn;

class TimeColumn
{
    /**
     * @param  string  $name  Название столбца
     * @param  string|null  $label  Подпись столбца
     * @param  string|null  $format  Формат отображения номера телефона, дефолтный указан в конфиге
     * @return TextColumn Текстовый столбец
     */
    public static function make(string $name, ?string $label = null, ?string $format = null): TextColumn
    {
        $format = $format ?? config('helpers.format.time');

        return TextColumn::make($name)
            ->label($label)
            ->sortable()
            ->time($format);
    }
}
