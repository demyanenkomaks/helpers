<?php

namespace Maksde\Helpers\Filament\Tables\Filters;

use Filament\Forms\Components\DatePicker;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class TimestampFilter
{
    public static function make(string $column, ?string $label = null): Filter
    {
        if ($label === null) {
            $label = match ($column) {
                'created_at' => __('helpers::helpers.timestamp.created_at'),
                'updated_at' => trans('helpers::helpers.timestamp.updated_at'),
                'deleted_at' => trans('helpers::helpers.timestamp.deleted_at'),
                default => null,
            };
        }

        return Filter::make($column)
            ->form([
                DatePicker::make($column.'_from')->label($label.' от'),
                DatePicker::make($column.'_until')->label($label.' до'),
            ])
            ->query(function (Builder $query, array $data) use ($column): Builder {
                return $query
                    ->when($data[$column.'_from'], fn (Builder $query, $date): Builder => $query->whereDate($column, '>=', $date))
                    ->when($data[$column.'_until'], fn (Builder $query, $date): Builder => $query->whereDate($column, '<=', $date));
            });
    }
}
