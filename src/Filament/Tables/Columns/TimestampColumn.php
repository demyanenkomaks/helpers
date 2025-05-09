<?php

namespace Maksde\Helpers\Filament\Tables\Columns;

use Filament\Tables\Columns\TextColumn;

class TimestampColumn
{
    public static function make(string $name, ?string $label = null, bool $isToggledHiddenByDefault = false, ?string $format = null): TextColumn
    {
        $format = $format ?? config('helpers.format.timestamp');

        return TextColumn::make($name)
            ->label(function () use ($name, $label): ?string {
                if ($label) {
                    return $label;
                }

                return match ($name) {
                    'created_at' => __('helpers::helpers.timestamp.created_at'),
                    'updated_at' => trans('helpers::helpers.timestamp.updated_at'),
                    'deleted_at' => trans('helpers::helpers.timestamp.deleted_at'),
                    default => null,
                };
            })
            ->sortable()
            ->dateTime($format)
            ->toggleable(isToggledHiddenByDefault: $isToggledHiddenByDefault);
    }
}
