<?php

namespace Maksde\Helpers\Filament\Forms;

use Filament\Forms\Components\Placeholder;
use Illuminate\Support\Carbon;

class TimestampPlaceholder
{
    public static function make(string $column, ?string $label = null, int|string $columnSpan = 1, string $format = null): Placeholder
    {
        $format = $format ?? config('helpers.format.timestamp');

        return Placeholder::make($column)
            ->label(function () use ($column, $label): ?string {
                if ($label) {
                    return $label;
                }

                return match ($column) {
                    'created_at' => __('helpers::helpers.timestamp.created_at'),
                    'updated_at' => trans('helpers::helpers.timestamp.updated_at'),
                    'deleted_at' => trans('helpers::helpers.timestamp.deleted_at'),
                    default => null,
                };
            })
            ->content(fn ($record): string => ! empty($record->{$column}) ? Carbon::parse($record->{$column})->translatedFormat($format) : '')
            ->hidden(fn ($record): bool => empty($record->{$column}));
    }
}
