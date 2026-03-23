<?php

declare(strict_types=1);

namespace Maksde\Helpers\Filament\Resources\Tables\Filters;

use Exception;
use Filament\Tables\Filters\Filter;

class CreateUpdateFilters
{
    /**
     * @return list<Filter> Фильтры для полей «Добавлена» и «Отредактирована»
     *
     * @throws Exception
     */
    public static function make(): array
    {
        return [
            TimestampFilter::make('created_at'),
            TimestampFilter::make('updated_at'),
        ];
    }
}
