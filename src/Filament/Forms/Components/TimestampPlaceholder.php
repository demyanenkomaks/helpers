<?php

namespace Maksde\Helpers\Filament\Forms\Components;

use Filament\Forms\Components\Placeholder;
use Illuminate\Support\Carbon;

class TimestampPlaceholder
{
    /**
     * @param  string  $name  Название поля
     * @param  string|null  $label  Подпись поля
     * @param  int|string  $columnSpan  Сколько столбцов заполнит компонент в родительской сетке формы
     * @param  string|null  $format  Формат отображения даты и времени, дефолтный указан в конфиге
     * @return Placeholder Компонент заполнитель
     */
    public static function make(string $name, ?string $label = null, int|string $columnSpan = 1, ?string $format = null): Placeholder
    {
        $format = $format ?? config('helpers.format.timestamp');

        return Placeholder::make($name)
            ->label(function () use ($name, $label): ?string {
                if ($label) {
                    return $label;
                }

                return match ($name) {
                    'created_at' => __('helpers::helpers.timestamp.created_at'),
                    'updated_at' => __('helpers::helpers.timestamp.updated_at'),
                    'deleted_at' => __('helpers::helpers.timestamp.deleted_at'),
                    default => null,
                };
            })
            ->content(fn ($record): string => ! empty($record->{$name}) ? Carbon::parse($record->{$name})->translatedFormat($format) : '')
            ->hidden(fn ($record): bool => empty($record->{$name}))
            ->columnSpan($columnSpan);
    }
}
