<?php

declare(strict_types=1);

namespace Maksde\Helpers\Filament\Resources\Tables\Actions;

use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;

class ChangePassword
{
    public static function make(): Action
    {
        return Action::make('changePassword')
            ->requiresConfirmation()
            ->color('danger')
            ->icon('heroicon-o-key')
            ->iconButton()
            ->tooltip(__('filament-users::user.resource.change_password'))
            ->label(__('filament-users::user.resource.change_password'))
            ->schema([
                TextInput::make('password')
                    ->label(__('filament-users::user.resource.password'))
                    ->placeholder(__('filament-users::user.resource.change_password_auto'))
                    ->password()
                    ->revealable(filament()->arePasswordsRevealable())
                    ->required(static fn ($record): bool => ! $record)
                    ->rule(Password::default())
                    ->dehydrated(filled(...))
                    ->dehydrateStateUsing(Hash::make(...))
                    ->same('passwordConfirmation'),
                TextInput::make('passwordConfirmation')
                    ->label(__('filament-users::user.resource.password_confirmation'))
                    ->placeholder(__('filament-users::user.resource.change_password_auto'))
                    ->password()
                    ->revealable(filament()->arePasswordsRevealable())
                    ->required(static fn ($record): bool => ! $record)
                    ->dehydrated(false),
            ])
            ->action(static function ($record, $data): void {
                $auto = ! isset($data['password']);
                $password = $data['password'] ?? Str::random(12);
                $record->password = $password;
                $record->save();

                Notification::make()
                    ->title(__('filament-users::user.resource.change_password'))
                    ->body(
                        $auto
                            ? __('filament-users::user.resource.change_password_auto').' ['.$password.']'
                            : __('filament-users::user.resource.change_password_success'),
                    )
                    ->success()
                    ->send();
            });
    }
}
