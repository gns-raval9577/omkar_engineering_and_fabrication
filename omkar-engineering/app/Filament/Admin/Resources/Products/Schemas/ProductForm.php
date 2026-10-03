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
                            ->imageEditorAspectRatios([
                                null,
                                '16:9',
                                '4:3',
                                '1:1',
                            ])
                            ->maxSize(5120)
                            ->required()
                            ->helperText('Formats: JPG, PNG, WebP up to 5MB. Click edit to crop.')
                            ->columnSpanFull()
                            ->validationMessages([
                                'required' => 'Please upload a featured product image.',
                            ]),

                        Placeholder::make('guidelines')
                            ->label('Publishing Guidelines')
                            ->content(new HtmlString('
                                <div class="text-xs text-gray-500 dark:text-gray-400 space-y-1.5 pt-2">
                                    <p>• High-resolution images (min. 800×600px) provide the best presentation.</p>
                                    <p>• URL slug is automatically generated from the title for clean website URLs.</p>
                                    <p>• Full specifications are optional and can be updated anytime.</p>
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
