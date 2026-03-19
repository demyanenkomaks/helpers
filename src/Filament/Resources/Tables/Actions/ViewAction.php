<?php

namespace Maksde\Helpers\Filament\Resources\Tables\Actions;

use Filament\Actions\ViewAction as BaseAction;

class ViewAction
{
    public static function make(): BaseAction
    {
        return BaseAction::make()
            ->iconButton()
            ->tooltip('Просмотр');
    }
}
