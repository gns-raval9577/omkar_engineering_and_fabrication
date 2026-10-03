<?php

namespace App\Filament\Admin\Resources\ProductImages\Pages;

use App\Filament\Admin\Resources\ProductImages\ProductImagesResource;
use App\Models\Product;
use App\Models\ProductImages;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class CreateProductImages extends CreateRecord
{
    protected static string $resource = ProductImagesResource::class;

    protected static ?string $title = 'Upload Product Gallery Images';

    /**
     * Handle multi-image creation in one shot.
     */
    protected function handleRecordCreation(array $data): Model
    {
        $productId = $data['product_id'];
        $product = Product::find($productId);

        // Retrieve uploaded image paths (array from multiple FileUpload)
        $uploadedImages = (array) ($data['images'] ?? []);

        // Fallback if single image was supplied
        if (empty($uploadedImages) && ! empty($data['image'])) {
            $uploadedImages = is_array($data['image']) ? $data['image'] : [$data['image']];
        }

        $baseTitle = trim($data['title'] ?? '') ?: ($product?->title ?? 'Product Photo');
        $firstRecord = null;
        $totalUploaded = 0;

        foreach ($uploadedImages as $index => $imagePath) {
            if (empty($imagePath)) {
                continue;
            }

            $totalUploaded++;
            $title = count($uploadedImages) > 1 
                ? "{$baseTitle} - Image " . ($index + 1) 
                : $baseTitle;

            $record = ProductImages::create([
                'product_id' => $productId,
                'title' => $title,
                'image' => $imagePath,
            ]);

            if (! $firstRecord) {
                $firstRecord = $record;
            }
        }

        return $firstRecord ?? ProductImages::create([
            'product_id' => $productId,
            'title' => $baseTitle,
            'image' => null,
        ]);
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

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Gallery Images Uploaded')
            ->body('Product images have been uploaded and linked successfully.');
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
