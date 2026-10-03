<?php

namespace App\Filament\Admin\Pages\Auth;

use Filament\Actions\Action;
use Filament\Auth\Pages\Register as BaseRegister;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Component;
use Filament\Support\Icons\Heroicon;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class Register extends BaseRegister
{
    protected static string $layout = 'filament.admin.pages.auth.login-layout';

    protected string $view = 'filament.admin.pages.auth.register';

    public function getTitle(): string | Htmlable
    {
        return 'Register Administrator | Omkar Engineering and Fabrication';
    }

    public function getHeading(): string | Htmlable | null
    {
        return null;
    }

    public function getSubheading(): string | Htmlable | null
    {
        return null;
    }

    public function hasLogo(): bool
    {
        return false;
    }

    protected function getNameFormComponent(): Component
    {
        return TextInput::make('name')
            ->label('Full Name')
            ->placeholder('Enter your full name')
            ->required()
            ->maxLength(255)
            ->autofocus()
            ->extraInputAttributes([
                'class' => 'ecom-custom-input',
            ]);
    }

    protected function getEmailFormComponent(): Component
    {
        return TextInput::make('email')
            ->label('Email Address')
            ->placeholder('admin@omkarengineering.com')
            ->email()
            ->required()
            ->maxLength(255)
            ->unique($this->getUserModel())
            ->extraInputAttributes([
                'class' => 'ecom-custom-input',
            ]);
    }

    protected function getPasswordFormComponent(): Component
    {
        return TextInput::make('password')
            ->label('Password')
            ->placeholder('Create a strong password')
            ->password()
            ->revealable(filament()->arePasswordsRevealable())
            ->required()
            ->rule(Password::default())
            ->showAllValidationMessages()
            ->dehydrateStateUsing(fn ($state) => Hash::make($state))
            ->same('passwordConfirmation')
            ->validationAttribute(__('filament-panels::auth/pages/register.form.password.validation_attribute'))
            ->extraInputAttributes([
                'class' => 'ecom-custom-input',
            ]);
    }

    protected function getPasswordConfirmationFormComponent(): Component
    {
        return TextInput::make('passwordConfirmation')
            ->label('Confirm Password')
            ->placeholder('Re-enter your password')
            ->password()
            ->revealable(filament()->arePasswordsRevealable())
            ->required()
            ->dehydrated(false)
            ->extraInputAttributes([
                'class' => 'ecom-custom-input',
            ]);
    }

    public function getRegisterFormAction(): Action
    {
        return parent::getRegisterFormAction()
            ->label('Create Admin Account')
            ->icon(Heroicon::ArrowRightEndOnRectangle)
            ->iconPosition('after')
            ->size('lg');
    }
}
