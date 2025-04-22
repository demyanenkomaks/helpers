<?php

namespace Maksde\Helpers\Filament\Forms\Components;

use Filament\Forms\Components\TextInput;

class PhoneForm
{
    public static function make(string $name, ?string $label = null, int|string $columnSpan = 1): TextInput
    {
        return TextInput::make($name)
            ->label($label)
            ->required()
            ->mask(config('helpers.format.form.phone.mask'))
            ->placeholder(config('helpers.format.form.phone.placeholder'))
            ->stripCharacters(config('helpers.format.form.phone.stripCharacters'))
            ->rules(['regex:'.config('helpers.format.form.phone.regex')])
            ->columnSpan($columnSpan);
    }
}
