<?php

namespace Maksde\Helpers\Resource;


use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ToggleColumn;

trait Boolean
{
    public static function toggleForm(string $column, string $label, int|string $columnSpan = 1): Toggle
    {
        return Toggle::make($column)
            ->label($label)
            ->onColor('success')
            ->offColor('danger')
            ->columnSpan($columnSpan);
    }

    public static function toggleColumn(string $column, string $label, bool $isToggledHiddenByDefault = false): ToggleColumn
    {
        return ToggleColumn::make($column)
            ->label($label)
            ->onColor('success')
            ->offColor('danger')
            ->toggleable(isToggledHiddenByDefault: $isToggledHiddenByDefault);
    }

    public static function toggleIconColumn(string $column, string $label, bool $isToggledHiddenByDefault = true): IconColumn
    {
        return IconColumn::make('is_urgency')
            ->label('Срочность')
            ->sortable()
            ->boolean()
            ->toggleable(isToggledHiddenByDefault: $isToggledHiddenByDefault);
    }
}
