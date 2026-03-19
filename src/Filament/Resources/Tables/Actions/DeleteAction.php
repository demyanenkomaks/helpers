<?php

namespace Maksde\Helpers\Filament\Resources\Tables\Actions;

use Filament\Actions\DeleteAction as BaseAction;

class DeleteAction
{
    public static function make(): BaseAction
    {
        return BaseAction::make()
            ->iconButton()
            ->tooltip('Удалить');
    }
}
