<?php

namespace Maksde\Helpers\Filament\Forms\Components;

use Filament\Forms\Components\Toggle;

class BooleanToggleForm
{
    /**
     * @param  string  $name  Название поля
     * @param  string|null  $label  Подпись поля
     * @param  int|string  $columnSpan  Сколько столбцов заполнит компонент в родительской сетке формы
     * @return Toggle Компонент переключения
     */
    public static function make(string $name, ?string $label = null, int|string $columnSpan = 'full'): Toggle
    {
        return Toggle::make($name)
            ->label($label)
            ->onColor('success')
            ->offColor('danger')
            ->columnSpan($columnSpan);
    }
}
