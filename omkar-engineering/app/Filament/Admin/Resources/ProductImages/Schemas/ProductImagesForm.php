<?php

namespace App\Filament\Admin\Resources\ProductImages\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use App\Models\Product;

class ProductImagesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Select::make('product_id')
                    ->label('Product')
                    ->relationship('product', 'title')
                    ->required()
                    ->searchable(),
                FileUpload::make('image')
                    ->image()
                    ->directory('product-images')
                    ->imagePreviewHeight('100')
                    ->maxSize(1024),
            ]);
    }
}
