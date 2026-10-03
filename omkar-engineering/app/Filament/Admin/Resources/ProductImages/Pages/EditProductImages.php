<?php

namespace App\Filament\Admin\Resources\ProductImages\Pages;

use App\Filament\Admin\Resources\ProductImages\ProductImagesResource;
use App\Models\ProductImages;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditProductImages extends EditRecord
{
    protected static string $resource = ProductImagesResource::class;

    protected static ?string $title = 'Edit Product Image';

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    /**
     * Livewire method to delete an existing product gallery photo directly from this screen.
     */
    public function deleteExistingImage(int $imageId): void
    {
        $image = ProductImages::find($imageId);

        if ($image) {
            if ($image->image && Storage::disk('public')->exists($image->image)) {
                Storage::disk('public')->delete($image->image);
            }

            $image->delete();

            Notification::make()
                ->success()
                ->title('Photo Removed')
                ->body('The image has been permanently removed from the product gallery.')
                ->send();
        }
    }
}
