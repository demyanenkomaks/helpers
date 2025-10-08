<?php

namespace Maksde\Helpers\Filament\Resources\Schemas;

use Schmeits\FilamentCharacterCounter\Forms\Components\Textarea;

class TextCharCount
{
    /**
     * @param  string  $name  Название поля
     * @param  string|null  $label  Подпись поля
     * @param  int  $maxLength  Максимальное количество символов
     * @param  int|string  $columnSpan  Сколько столбцов заполнит компонент в родительской сетке формы
     * @return Textarea Компонент ввода текста с счетчиком символов
     */
    public static function make(string $name, ?string $label = null, int $maxLength = 10000, int|string $columnSpan = 1): Textarea
    {
        return Textarea::make($name)
            ->label($label)
            ->maxLength($maxLength)
            ->columnSpan($columnSpan);
    }
}
