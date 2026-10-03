<?php

namespace App\Filament\Admin\Resources\Galleries\Pages;

use App\Filament\Admin\Resources\Galleries\GalleryResource;
use App\Models\Gallery;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateGallery extends CreateRecord
{
    protected static string $resource = GalleryResource::class;

    protected static ?string $title = 'Upload Gallery Photos';

    protected function handleRecordCreation(array $data): Model
    {
        $uploadedImages = (array) ($data['images'] ?? []);

        if (empty($uploadedImages) && ! empty($data['image'])) {
            $uploadedImages = is_array($data['image']) ? $data['image'] : [$data['image']];
        }

        $category = $data['category'] ?? 'company';
        $categoryName = Gallery::CATEGORIES[$category] ?? ucfirst($category);
        $baseTitle = trim($data['title'] ?? '') ?: $categoryName;
        $firstRecord = null;
        $count = count($uploadedImages);

        foreach ($uploadedImages as $index => $imagePath) {
            if (empty($imagePath)) {
                continue;
            }

            $title = $count > 1
                ? "{$baseTitle} - Photo " . ($index + 1)
                : $baseTitle;

            $record = Gallery::create([
                'title' => $title,
                'category' => $category,
                'image' => $imagePath,
                'description' => $data['description'] ?? null,
                'is_active' => $data['is_active'] ?? true,
            ]);

            if (! $firstRecord) {
                $firstRecord = $record;
            }
        }

        return $firstRecord ?? Gallery::create([
            'title' => $baseTitle,
            'category' => $category,
            'image' => null,
            'description' => $data['description'] ?? null,
            'is_active' => $data['is_active'] ?? true,
        ]);
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Gallery Photos Uploaded')
            ->body('Photos have been uploaded and added to the gallery.');
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
