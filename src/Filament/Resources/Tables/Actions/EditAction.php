<?php

declare(strict_types=1);

namespace Maksde\Helpers\Filament\Resources\Tables\Actions;

use Filament\Actions\EditAction as BaseAction;

class EditAction
{
    public static function make(): BaseAction
    {
        return BaseAction::make()
            ->iconButton()
            ->tooltip(__('helpers::helpers.table_action.edit_tooltip'));
    }
}
