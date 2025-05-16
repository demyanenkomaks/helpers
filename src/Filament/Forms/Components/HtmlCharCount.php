<?php

namespace Maksde\Helpers\Filament\Forms\Components;

use Schmeits\FilamentCharacterCounter\Forms\Components\RichEditor;

class HtmlCharCount
{
    /**
     * @param  string  $name  Название поля
     * @param  string|null  $label  Подпись поля
     * @param  int  $maxLength  Максимальное количество символов
     * @param  int|string  $columnSpan  Сколько столбцов заполнит компонент в родительской сетке формы
     * @return RichEditor Компонент ввода html с счетчиком символов
     */
    public static function make(string $name, ?string $label = null, int $maxLength = 10000, int|string $columnSpan = 1): RichEditor
    {
        return RichEditor::make($name)
            ->label($label)
            ->maxLength($maxLength)
            ->columnSpan($columnSpan)
            ->toolbarButtons([
                'blockquote',
                'bold',
                'bulletList',
                'codeBlock',
                'h2',
                'h3',
                'italic',
                'link',
                'orderedList',
                'redo',
                'strike',
                'underline',
                'undo',
            ]);
    }
}
