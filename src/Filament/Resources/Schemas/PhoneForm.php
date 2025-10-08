<?php

namespace Maksde\Helpers\Filament\Resources\Schemas;

use Filament\Forms\Components\TextInput;

class PhoneForm
{
    /**
     * @param  string  $name  Название поля
     * @param  string|null  $label  Подпись поля
     * @param  int|string  $columnSpan  Сколько столбцов заполнит компонент в родительской сетке формы
     * @return TextInput Компонент заполнения номера телефона
     */
    public static function make(string $name, ?string $label = null, int|string $columnSpan = 1): TextInput
    {
        return TextInput::make($name)
            ->label($label)
            ->required()
            ->mask(config('helpers.format.form.phone.mask'))
            ->placeholder(config('helpers.format.form.phone.placeholder'))
            ->stripCharacters(config('helpers.format.form.phone.stripCharacters'))
            ->rules(['regex:'.config('helpers.format.form.phone.regex')])
            ->columnSpan($columnSpan);
    }
}
