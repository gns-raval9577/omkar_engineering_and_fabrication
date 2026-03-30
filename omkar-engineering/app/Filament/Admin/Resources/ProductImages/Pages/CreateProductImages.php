<?php

namespace App\Filament\Admin\Resources\ProductImages\Pages;

use App\Filament\Admin\Resources\ProductImages\ProductImagesResource;
use App\Models\ProductImages;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class CreateProductImages extends CreateRecord
{
    protected static string $resource = ProductImagesResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $images = array_values(array_filter(Arr::wrap($data['image'] ?? [])));

        $record = ProductImages::create([
            ...$data,
            'image' => $images[0] ?? null,
        ]);

        foreach (array_slice($images, 1) as $image) {
            ProductImages::create([
                ...$data,
                'image' => $image,
            ]);
        }

        return $record;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
