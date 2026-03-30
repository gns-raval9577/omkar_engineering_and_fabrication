<?php

namespace App\Filament\Admin\Resources\ProductImages\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class ProductImagesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('product_id')
                    ->label('Product')
                    ->relationship('product', 'title')
                    ->required(),
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('image')
                    ->image()
                    ->multiple(fn (string $operation): bool => $operation === 'create')
                    ->directory('product-images')
                    ->imagePreviewHeight('100')
                    ->required()
                    ->maxSize(1024),
            ]);
    }
}
