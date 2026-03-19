<?php

namespace Maksde\Helpers\Filament\Resources\Tables\Actions;

use Filament\Actions\EditAction as BaseAction;

class EditAction
{
    public static function make(): BaseAction
    {
        return BaseAction::make()
            ->iconButton()
            ->tooltip('Редактировать');
    }
}
