<?php

declare(strict_types=1);

namespace Maksde\Helpers\Filament\Resources\Schemas\Infolists;

use Filament\Infolists\Components\TextEntry;

class CreateUpdateTextEntry
{
    /**
     * @param  int|string  $columnSpan  Сколько столбцов заполнит компонент в родительской сетке формы
     * @return list<TextEntry> Заполнители для полей «Добавлена» и «Отредактирована»
     */
    public static function make(int|string $columnSpan = 1): array
    {
        return [
            TimestampTextEntry::make('created_at', columnSpan: $columnSpan),
            TimestampTextEntry::make('updated_at', columnSpan: $columnSpan),
        ];
    }
}
