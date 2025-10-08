<?php

namespace Maksde\Helpers\Filament\Resources\Schemas;

class CreateUpdateTextEntry
{
    /**
     * @param  int|string  $columnSpan  Сколько столбцов заполнит компонент в родительской сетке формы
     * @return array Массив компонентов заполнителей для полей Добавлена и Отредактирована
     */
    public static function make(int|string $columnSpan = 1): array
    {
        return [
            TimestampTextEntry::make('created_at', columnSpan: $columnSpan),
            TimestampTextEntry::make('updated_at', columnSpan: $columnSpan),
        ];
    }
}
