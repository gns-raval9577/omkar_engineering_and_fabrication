<?php

namespace App\Filament\Admin\Resources\Products\Schemas;

use Filament\Schemas\Schema;
use App\Models\Product;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Str;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                TextInput::make('slug')
                    ->disabled()
                    ->dehydrated()
                    ->required()
                    ->maxLength(255)
                    ->unique(Product::class, 'slug', ignoreRecord: true),

                TextInput::make('description')
                    ->required()
                    ->maxLength(255),

                TextInput::make('sort_description')
                    ->required()
                    ->maxLength(255),

                FileUpload::make('image')
                    ->label('Product Image')
                    ->image() // only image
                    ->directory('product-image') // storage/app/public/product-icons
                    ->imagePreviewHeight('100')
                    ->maxSize(1024), // 1MB

                // Toggle::make('status')
                //     ->default(true),
            ]);
    }
}
