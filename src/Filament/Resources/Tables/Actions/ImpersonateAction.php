<?php

namespace Maksde\Helpers\Filament\Resources\Tables\Actions;

use Filament\Actions\Action;
use Filament\Support\Concerns\EvaluatesClosures;
use TomatoPHP\FilamentUsers\Concerns\Impersonates;

class ImpersonateAction
{
    use EvaluatesClosures;
    use Impersonates;

    public static function make(): Action
    {
        (new self)->guard(config('filament-users.impersonate.auth_guard'));
        (new self)->redirectTo(config('filament-users.impersonate.redirect_to'));
        (new self)->backTo(config('filament-users.impersonate.back_to'));

        return Action::make('impersonate')
            ->iconButton()
            ->requiresConfirmation()
            ->icon('heroicon-o-user-circle')
            ->color('info')
            ->tooltip(__('filament-users::user.resource.title.impersonate'))
            ->label(__('filament-users::user.resource.title.impersonate'))
            ->action((new self)->impersonate(...))
            ->hidden(static fn ($record): bool => ! (new self)->canBeImpersonated($record));
    }
}
