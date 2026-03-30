<?php

namespace App\Filament\Admin\Resources\ProductImages\Pages;

use App\Filament\Admin\Resources\ProductImages\ProductImagesResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditProductImages extends EditRecord
{
    protected static string $resource = ProductImagesResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
