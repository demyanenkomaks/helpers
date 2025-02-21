<?php

namespace Maksde\Helpers\Resource;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Placeholder;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;

trait Datetime
{
    public static string $defaultDateTimeDisplayFormat = 'j M Y H:i:s';

    public static function datetimePlaceholder(string $column, string $label, int $columnSpan = 1, string $format = null): Placeholder
    {
        $format = $format ?? self::$defaultDateTimeDisplayFormat;
        return Placeholder::make($column)
            ->label($label)
            ->hidden(fn($record): bool => empty($record->{$column}))
            ->content(fn($record): string => !empty($record->{$column}) ? Carbon::parse($record->{$column})->translatedFormat($format) : '')
            ->columnSpan($columnSpan);
    }

    public static function datetimeTextColumn(string $column, string $label, string $format = null, bool $isToggledHiddenByDefault = true): TextColumn
    {
        $format = $format ?? self::$defaultDateTimeDisplayFormat;
        return TextColumn::make($column)
            ->label($label)
            ->sortable()
            ->dateTime($format)
            ->toggleable(isToggledHiddenByDefault: $isToggledHiddenByDefault);
    }

    public static function datetimeFilter(string $column, string $label): Filter
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
}
