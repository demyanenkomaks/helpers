<?php

namespace Maksde\Helpers\Filament\Forms\Components;

use Schmeits\FilamentCharacterCounter\Forms\Components\TextInput;

class StringCharCount
{
    /**
     * @param  string  $name  Название поля
     * @param  string|null  $label  Подпись поля
     * @param  int  $maxLength  Максимальное количество символов
     * @param  int|string  $columnSpan  Сколько столбцов заполнит компонент в родительской сетке формы
     * @return TextInput Компонент ввода текста с счетчиком символов
     */
    public static function make(string $name, ?string $label = null, int $maxLength = 255, int|string $columnSpan = 1): TextInput
    {
        return TextInput::make($name)
            ->label($label)
            ->maxLength($maxLength)
            ->columnSpan($columnSpan);
    }
}
