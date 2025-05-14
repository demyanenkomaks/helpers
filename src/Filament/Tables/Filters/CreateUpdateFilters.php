<?php

namespace Maksde\Helpers\Filament\Tables\Filters;

class CreateUpdateFilters
{
    /**
     * @return array Массив компонентов фильтров Добавлена и Отредактирована
     *
     * @throws \Exception
     */
    public static function make(): array
    {
        return [
            TimestampFilter::make('created_at'),
            TimestampFilter::make('updated_at'),
        ];
    }
}
