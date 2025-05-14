<?php

namespace Maksde\Helpers\Filament\Forms\Components;

use Filament\Forms\Components\TimePicker;

class TimeForm
{
    /**
     * @param  string  $name  Название поля
     * @param  string|null  $label  Подпись поля
     * @param  int|string  $columnSpan  Сколько столбцов заполнит компонент в родительской сетке формы
     * @return TimePicker Компонент выбора времени
     */
    public static function make(string $name, ?string $label = null, int|string $columnSpan = 1): TimePicker
    {
        return TimePicker::make($name)
            ->label($label)
            ->columnSpan($columnSpan);
    }
}
