<?php

namespace App\Filament\Admin\Resources\ProductImages\Schemas;

use App\Models\Product;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\HtmlString;

class ProductImagesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                // Section 1: Product Selection & Optional Caption (Full Width 2-Column Row)
                Section::make('1. Product Selection')
                    ->description('Select the product to attach photos to, and optionally specify a caption prefix.')
                    ->icon(Heroicon::OutlinedShoppingBag)
                    ->schema([
                        Select::make('product_id')
                            ->label('Select Product *')
                            ->relationship('product', 'title')
                            ->searchable()
                            ->preload()
                            ->live()
                            ->required()
                            ->placeholder('Search or select a product...')
                            ->helperText('Choose the product whose gallery you want to update.')
                            ->validationMessages([
                                'required' => 'Please select a product from the list.',
                            ]),

                        TextInput::make('title')
                            ->label('Photo Title / Caption Prefix (Optional)')
                            ->placeholder('e.g., Workshop Assembly, Front Elevation (auto-named if blank)')
                            ->maxLength(255)
                            ->helperText('Optional prefix. If left blank, photos will be auto-named with the product title.'),
                    ])
                    ->columns([
                        'default' => 1,
                        'md' => 2,
                    ]),

                // Section 2: Upload Multiple Photos (Full Width, Grid Layout)
                Section::make('2. Upload Gallery Photos')
                    ->description('Select or drag & drop multiple photos to upload in one shot.')
                    ->icon(Heroicon::OutlinedCloudArrowUp)
                    ->schema([
                        // Multi-file uploader for Create Operation
                        FileUpload::make('images')
                            ->label('Select or Drag & Drop Multiple Photos')
                            ->multiple()
                            ->reorderable()
                            ->appendFiles()
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                null,
                                '16:9',
                                '4:3',
                                '1:1',
                            ])
                            ->imagePreviewHeight('170')
                            ->panelLayout('grid')
                            ->disk('public')
                            ->directory('product-images')
                            ->maxSize(10240)
                            ->required(fn (string $operation) => $operation === 'create')
                            ->helperText('Select or drag & drop multiple images (JPG, PNG, WebP up to 10MB each). Photos will arrange cleanly in a grid. Click the pencil icon on any thumbnail to crop.')
                            ->validationMessages([
                                'required' => 'Please select at least one photo to upload.',
                            ])
                            ->visible(fn (string $operation) => $operation === 'create')
                            ->columnSpanFull(),

                        // Single file uploader for Edit Operation
                        FileUpload::make('image')
                            ->label('Replace Image')
                            ->image()
                            ->imageEditor()
                            ->imagePreviewHeight('200')
                            ->disk('public')
                            ->directory('product-images')
                            ->maxSize(10240)
                            ->helperText('Upload a new photo to replace this specific gallery image.')
                            ->visible(fn (string $operation) => $operation === 'edit')
                            ->columnSpanFull(),
                    ]),

                // Section 3: Current Product Gallery (Full Width, Compact 6-Column Grid)
                Section::make('3. Current Product Gallery')
                    ->description('Active photos already attached to the selected product.')
                    ->icon(Heroicon::OutlinedPhoto)
                    ->schema([
                        Placeholder::make('existing_gallery')
                            ->label('')
                            ->columnSpanFull()
                            ->content(function ($get, $record) {
                                $productId = $get('product_id') ?? $record?->product_id;
                                $product = $productId ? Product::with('images')->find($productId) : null;

                                return new HtmlString(
                                    view('filament.admin.components.product-existing-gallery', [
                                        'product' => $product,
                                        'productId' => $productId,
                                    ])->render()
                                );
                            }),
                    ])
                    ->collapsible(),
            ]);
    }
}
