<?php

namespace Maksde\Helpers\Filament\Tables\Columns;

use Filament\Tables\Columns\TextColumn;

class PhoneColumn
{
    public static function make(string $name, ?string $label = null, ?string $format = null): TextColumn
    {
        $format = $format ?? config('helpers.format.tables.phone');

        return TextColumn::make($name)
            ->label($label)
            ->icon('heroicon-m-device-phone-mobile')
            ->sortable()
            ->searchable()
            ->copyable()
            ->copyMessage(__('helpers::helpers.message.copy.phone'))
            ->copyMessageDuration(1500)
            ->formatStateUsing(fn (string $state): string => self::phoneFormat($state, $format));
    }

    private static function phoneFormat(string $phone, string $format): string
    {
        if (preg_match(config('helpers.format.form.phone.regex'), $phone) !== 1) {
            throw new \InvalidArgumentException('Phone number "'.$phone.'" is not in the correct format');
        }

        $phoneArray = str_split(ltrim($phone, '+'));
        $formatArray = str_split($format);
        $output = '';

        $i = 0;
        foreach ($formatArray as $value) {
            if ($value === '#') {
                $output .= $phoneArray[$i++] ?? '_';
            } else {
                $output .= $value;
            }
        }

        return $output;
    }
}
