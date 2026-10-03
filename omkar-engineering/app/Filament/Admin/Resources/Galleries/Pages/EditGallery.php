<?php

namespace App\Filament\Admin\Resources\Galleries\Pages;

use App\Filament\Admin\Resources\Galleries\GalleryResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditGallery extends EditRecord
{
    protected static string $resource = GalleryResource::class;

    protected static ?string $title = 'Edit Gallery Photo';

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Gallery Photo Updated')
            ->body('The photo details have been saved successfully.');
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
