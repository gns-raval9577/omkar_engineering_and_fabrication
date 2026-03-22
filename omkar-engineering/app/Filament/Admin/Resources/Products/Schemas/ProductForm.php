<?php

namespace App\Filament\Admin\Resources\Products\Schemas;

use Filament\Schemas\Schema;
use App\Models\Product;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('description')
                    ->required()
                    ->maxLength(255),

                FileUpload::make('image')
                    ->label('Product Image')
                    ->image() // only image
                    ->directory('product-image') // storage/app/public/category-icons
                    ->imagePreviewHeight('100')
                    ->maxSize(1024), // 1MB

                // Toggle::make('status')
                //     ->default(true),
            ]);
    }
}
