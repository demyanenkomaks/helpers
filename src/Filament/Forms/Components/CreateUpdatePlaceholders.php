<?php

namespace Maksde\Helpers\Filament\Forms\Components;

class CreateUpdatePlaceholders
{
    /**
     * @param  int|string  $columnSpan  Сколько столбцов заполнит компонент в родительской сетке формы
     * @return array Массив компонентов заполнителей для полей Добавлена и Отредактирована
     */
    public static function make(int|string $columnSpan = 1): array
    {
        return [
            TimestampPlaceholder::make('created_at', columnSpan: $columnSpan),
            TimestampPlaceholder::make('updated_at', columnSpan: $columnSpan),
        ];
    }
}
