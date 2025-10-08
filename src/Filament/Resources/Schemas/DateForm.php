<?php

namespace Maksde\Helpers\Filament\Resources\Schemas;

use Filament\Forms\Components\DatePicker;

class DateForm
{
    /**
     * @param  string  $name  Название поля
     * @param  string|null  $label  Подпись поля
     * @param  int|string  $columnSpan  Сколько столбцов заполнит компонент в родительской сетке формы
     * @return DatePicker Компонент выбора даты
     */
    public static function make(string $name, ?string $label = null, int|string $columnSpan = 1): DatePicker
    {
        return DatePicker::make($name)
            ->label($label)
            ->minDate('1000-01-01')
            ->maxDate('9999-12-31')
            ->columnSpan($columnSpan);
    }
}
