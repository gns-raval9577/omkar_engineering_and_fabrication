<?php

namespace App\Filament\Admin\Resources\Products\Schemas;

use App\Models\Product;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns([
                'default' => 1,
                'sm' => 1,
                'md' => 3,
                'lg' => 3,
                'xl' => 3,
            ])
            ->components([
                // Left 2 Columns: Core Product Information & Specifications
                Section::make('Product Information')
                    ->description('Specify the product title, custom URL slug, and descriptions.')
                    ->icon(Heroicon::OutlinedTag)
                    ->schema([
                        TextInput::make('title')
                            ->label('Product Title')
                            ->placeholder('e.g., Heavy Duty Chemical Storage Tank')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null)
                            ->validationMessages([
                                'required' => 'Please fill out the product title.',
                            ]),

                        TextInput::make('slug')
                            ->label('URL Slug')
                            ->placeholder('e.g., heavy-duty-chemical-storage-tank')
                            ->helperText('Used for public product page URLs on the website.')
                            ->disabled()
                            ->dehydrated()
                            ->required()
                            ->maxLength(255)
                            ->unique(Product::class, 'slug', ignoreRecord: true)
                            ->validationMessages([
                                'required' => 'Please fill out the URL slug.',
                            ]),

                        Textarea::make('sort_description')
                            ->label('Short Description / Summary')
                            ->placeholder('A concise 1-2 sentence summary displayed on catalog cards and search previews...')
                            ->required()
                            ->rows(3)
                            ->maxLength(500)
                            ->columnSpanFull()
                            ->validationMessages([
                                'required' => 'Please fill out the short description / summary.',
                            ]),

                        Textarea::make('description')
                            ->label('Full Specifications & Technical Details (Optional)')
                            ->placeholder('Provide in-depth engineering specifications, material grades, dimensions, industrial standards, and application details (optional)...')
                            ->rows(8)
                            ->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->columnSpan([
                        'default' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                    ]),

                // Right 1 Column: Media & Catalog Guidance
                Section::make('Product Media')
                    ->description('Featured catalog photo.')
                    ->icon(Heroicon::OutlinedPhoto)
                    ->schema([
                        FileUpload::make('image')
                            ->label('Featured Product Image')
                            ->disk('public')
                            ->directory('product-image')
                            ->image()
                            ->imageEditor()
                            ->imageCropAspectRatio('3:4')
                            ->imageEditorAspectRatios([
                                '3:4',
                                '4:5',
                                '1:1',
                                null,
                            ])
                            ->maxSize(5120)
                            ->required()
                            ->helperText('Card box size: 3:4 ratio (~750×1000px). Cropping automatically matches the website product box.')
                            ->columnSpanFull()
                            ->validationMessages([
                                'required' => 'Please upload a featured product image.',
                            ]),

                        Placeholder::make('guidelines')
                            ->label('Publishing Guidelines')
                            ->content(new HtmlString('
                                <div class="text-xs text-gray-500 dark:text-gray-400 space-y-1.5 pt-2">
                                    <p>• <strong>Box Fit:</strong> The product card box uses a 3:4 vertical ratio (~750×1000px or 600×800px). Uploading or cropping in 3:4 ensures the full product fills the box without zooming or edge cropping.</p>
                                    <p>• <strong>Image Editor:</strong> Click the edit (crop) icon to frame your product into the 3:4 box.</p>
                                    <p>• <strong>URL Slug:</strong> Automatically generated from the title for clean website URLs.</p>
                                </div>
                            '))
                            ->columnSpanFull(),
                    ])
                    ->columnSpan([
                        'default' => 1,
                        'md' => 1,
                        'lg' => 1,
                        'xl' => 1,
                    ]),
            ]);
    }
}
