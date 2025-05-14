<?php

namespace Maksde\Helpers\Filament\Tables\Filters;

use Filament\Forms\Components\DatePicker;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class TimestampFilter
{
    /**
     * @param  string  $name  Название столбца
     * @param  string|null  $label  Подпись столбца
     * @return Filter Компонент фильтра даты и/или время формат поиска от даты до даты
     *
     * @throws \Exception
     */
    public static function make(string $name, ?string $label = null): Filter
    {
        if ($label === null) {
            $label = match ($name) {
                'created_at' => __('helpers::helpers.timestamp.created_at'),
                'updated_at' => __('helpers::helpers.timestamp.updated_at'),
                'deleted_at' => __('helpers::helpers.timestamp.deleted_at'),
                default => null,
            };
        }

        return Filter::make($name)
            ->form([
                DatePicker::make($name.'_from')->label($label.' от'),
                DatePicker::make($name.'_until')->label($label.' до'),
            ])
            ->query(function (Builder $query, array $data) use ($name): Builder {
                return $query
                    ->when($data[$name.'_from'], fn (Builder $query, $date): Builder => $query->whereDate($name, '>=', $date))
                    ->when($data[$name.'_until'], fn (Builder $query, $date): Builder => $query->whereDate($name, '<=', $date));
            });
    }
}
