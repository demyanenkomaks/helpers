<?php

namespace Maksde\Helpers\Filament\Forms\Components;

use Filament\Forms\Components\DateTimePicker;

class DateTimeForm
{
    /**
     * @param  string  $name  Название поля
     * @param  string|null  $label  Подпись поля
     * @param  int|string  $columnSpan  Сколько столбцов заполнит компонент в родительской сетке формы
     * @return DateTimePicker Компонент выбора даты и времени
     */
    public static function make(string $name, ?string $label = null, int|string $columnSpan = 1): DateTimePicker
    {
        return DateTimePicker::make($name)
            ->label($label)
            ->minDate('1970-01-01 00:00:01') // Ограничение timestamp для mysql, его можно переопределить
            ->maxDate('2037-12-31 23:59:59') // Ограничение timestamp для mysql, его можно переопределить
            ->columnSpan($columnSpan);
    }
}
