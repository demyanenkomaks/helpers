<?php

namespace Maksde\Helpers\Resource;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Placeholder;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;

/**
 * Для изменения окончания (Добавлена на Добавлен и Отредактирована на Отредактирован) необходимо указать в своем Resource
 *
 * protected static bool $labelMaleCreateUpdate = true;
 */
trait DatetimeAt
{
    public static string $defaultDateTimeDisplayFormat = 'j M Y H:i:s';

    public static function checkDatetimeLabelMale()
    {
        /* @phpstan-ignore staticProperty.notFound, nullCoalesce.variable */
        return $labelMaleCreateUpdate ?? false;
    }

    public static function labelCreate()
    {
        return self::checkDatetimeLabelMale() ? 'Добавлен' : 'Добавлена';
    }

    public static function labelUpdate()
    {
        return self::checkDatetimeLabelMale() ? 'Отредактирован' : 'Отредактирована';
    }

    public static function columnDatetimePlaceholder(string $column, string $label, int $columnSpan = 1)
    {
        return Placeholder::make($column)
            ->label($label)
            ->hidden(fn($record): bool => empty($record->{$column}))
            ->content(fn($record): string => !empty($record->{$column}) ? Carbon::parse($record->{$column})->translatedFormat(self::$defaultDateTimeDisplayFormat) : '')
            ->columnSpan($columnSpan);
    }

    public static function createdPlaceholder(?string $label = null, int $columnSpan = 1): Placeholder
    {
        return self::columnDatetimePlaceholder('created_at', $label ?? self::labelCreate(), $columnSpan);
    }

    public static function updatedPlaceholder(?string $label = null, int $columnSpan = 1): Placeholder
    {
        return self::columnDatetimePlaceholder('updated_at', $label ?? self::labelUpdate(), $columnSpan);
    }

    public static function columnDatetimeTextColumn(string $column, string $label, bool $isToggledHiddenByDefault = true): TextColumn
    {
        return TextColumn::make($column)
            ->label($label)
            ->sortable()
            ->dateTime(self::$defaultDateTimeDisplayFormat)
            ->toggleable(isToggledHiddenByDefault: $isToggledHiddenByDefault);
    }

    public static function createTextColumn(?string $label = null): TextColumn
    {
        return self::columnDatetimeTextColumn('created_at', $label ?? self::labelCreate());
    }

    public static function updateTextColumn(?string $label = null): TextColumn
    {
        return self::columnDatetimeTextColumn('updated_at', $label ?? self::labelUpdate());
    }

    public static function columnDatetimeFilter(string $column, string $label): Filter
    {
        return Filter::make($column)
            ->form([
                DatePicker::make($column . '_from')->label($label . ' от'),
                DatePicker::make($column . '_until')->label($label . ' до'),
            ])
            ->query(function (Builder $query, array $data) use ($column): Builder {
                return $query
                    ->when($data[$column . '_from'], fn(Builder $query, $date): Builder => $query->whereDate($column, '>=', $date))
                    ->when($data[$column . '_until'], fn(Builder $query, $date): Builder => $query->whereDate($column, '<=', $date));
            });
    }

    public static function createdFilter(?string $label = null): Filter
    {
        return self::columnDatetimeFilter('created_at', $label ?? self::labelCreate());
    }

    public static function updatedFilter(?string $label = null): Filter
    {
        return self::columnDatetimeFilter('updated_at', $label ?? self::labelUpdate());
    }
}
