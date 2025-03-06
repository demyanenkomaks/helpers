<?php

namespace Maksde\Helpers\Filament\Filters;

class CreateUpdateFilters
{
    public static function make(): array
    {
        return [
            TimestampFilter::make('created_at'),
            TimestampFilter::make('updated_at'),
        ];
    }
}
