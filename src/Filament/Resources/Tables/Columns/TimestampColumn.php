<?php

namespace Maksde\Helpers\Filament\Resources\Tables\Columns;

use Filament\Tables\Columns\TextColumn;

class TimestampColumn
{
    /**
     * @param  string  $name  Название столбца
     * @param  string|null  $label  Подпись столбца
     * @param  bool  $isToggledHiddenByDefault  Столбец скрыт по умолчанию
     * @param  string|null  $format  Формат отображения даты и времени, дефолтный указан в конфиге
     * @return TextColumn Текстовый столбец даты и времени
     */
    public static function make(string $name, ?string $label = null, bool $isToggledHiddenByDefault = false, ?string $format = null): TextColumn
    {
        $format = $format ?? config('helpers.format.timestamp');

        return TextColumn::make($name)
            ->label(function () use ($name, $label): ?string {
                if ($label) {
                    return $label;
                }

                return match ($name) {
                    'created_at' => __('helpers::helpers.timestamp.created_at'),
                    'updated_at' => __('helpers::helpers.timestamp.updated_at'),
                    'deleted_at' => __('helpers::helpers.timestamp.deleted_at'),
                    default => null,
                };
            })
            ->sortable()
            ->dateTime($format)
            ->toggleable(isToggledHiddenByDefault: $isToggledHiddenByDefault);
    }
}
