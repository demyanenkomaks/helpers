<?php

namespace Maksde\Helpers\Filament\Resources\Tables\Columns;

use Filament\Tables\Columns\TextColumn;

class EmailColumn
{
    /**
     * @param  string  $name  Название столбца
     * @param  string|null  $label  Подпись столбца
     * @return TextColumn Текстовый столбец почты
     */
    public static function make(string $name, ?string $label = null): TextColumn
    {
        return TextColumn::make($name)
            ->label($label)
            ->icon('heroicon-m-envelope')
            ->sortable()
            ->searchable()
            ->copyable()
            ->copyMessage(__('helpers::helpers.message.copy.email'))
            ->copyMessageDuration(1500);
    }
}
