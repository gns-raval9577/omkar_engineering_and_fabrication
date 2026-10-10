<?php

namespace App\Filament\Admin\Resources\Services\Schemas;

use App\Models\Services;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;

class ServicesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(3)
            ->components([
                // Left 2 Columns: Service Details
                Section::make('Service Information')
                    ->description('Enter the title, URL slug, and detailed descriptions for this engineering service.')
                    ->icon(Heroicon::OutlinedWrenchScrewdriver)
                    ->schema([
                        TextInput::make('title')
                            ->label('Service Title *')
                            ->placeholder('e.g., Heavy Structural Steel Fabrication')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                        TextInput::make('slug')
                            ->label('URL Slug *')
                            ->placeholder('e.g., heavy-structural-steel-fabrication')
                            ->disabled()
                            ->dehydrated()
                            ->required()
                            ->maxLength(255)
                            ->unique(Services::class, 'slug', ignoreRecord: true)
                            ->helperText('Auto-generated from title for clean URLs and search optimization.'),

                        Textarea::make('sort_description')
                            ->label('Short Description / Summary *')
                            ->placeholder('A concise 1-2 sentence overview displayed on the homepage service card carousel...')
                            ->required()
                            ->rows(3)
                            ->maxLength(500)
                            ->columnSpanFull()
                            ->helperText('Displayed on the website service card (recommended: 90–120 characters).'),

                        Textarea::make('description')
                            ->label('Full Description & Technical Scope')
                            ->placeholder('Comprehensive information regarding fabrication capabilities, machinery, material grades, industrial standards, and execution scope...')
                            ->rows(6)
                            ->columnSpanFull()
                            ->helperText('Detailed specifications shown in the service modal when visitors click "View Details".'),

                        TextInput::make('sort_order')
                            ->label('Display Order')
                            ->numeric()
                            ->default(0)
                            ->helperText('Controls ordering in the homepage carousel (0 = first, 1, 2, ...).'),

                        Toggle::make('is_active')
                            ->label('Publish to Website')
                            ->default(true)
                            ->helperText('When enabled, this service is visible on the homepage carousel.'),
                    ])
                    ->columns(2)
                    ->columnSpan([
                        'default' => 3,
                        'lg' => 2,
                    ]),

                // Right 1 Column: Service Image & Size Restrictions
                Section::make('Service Image & Sizing')
                    ->description('Upload service card image with exact dimensions.')
                    ->icon(Heroicon::OutlinedPhoto)
                    ->schema([
                        FileUpload::make('image')
                            ->label('Service Featured Image')
                            ->disk('public')
                            ->directory('services-image')
                            ->image()
                            ->imageEditor()
                            ->imageCropAspectRatio('1100:755')
                            ->imageEditorAspectRatios([
                                '1100:755',
                                '4:3',
                                '16:9',
                                '1:1',
                                null,
                            ])
                            ->imageResizeTargetWidth('1100')
                            ->imageResizeTargetHeight('755')
                            ->imageResizeMode('cover')
                            ->imagePreviewHeight('180')
                            ->maxSize(5120) // 5MB
                            ->helperText('Fixed card ratio: 1100 × 755 px (~1.46:1). Click the pencil/crop icon to crop and frame.')
                            ->columnSpanFull(),

                        Placeholder::make('image_guidelines')
                            ->label('Image Dimension Rules')
                            ->content(new HtmlString('
                                <div class="text-xs text-gray-500 dark:text-gray-400 space-y-1.5 pt-1">
                                    <p>• <strong>Exact Card Ratio:</strong> 1100 × 755 pixels (~1.46:1). All homepage carousel cards require this ratio for consistent height and smooth alignment.</p>
                                    <p>• <strong>Built-in Cropper:</strong> The crop editor is pre-locked to 1100:755 so any photo you upload can be centered without distortion.</p>
                                    <p>• <strong>Supported formats:</strong> JPG, PNG, WebP up to 5MB.</p>
                                </div>
                            '))
                            ->columnSpanFull(),
                    ])
                    ->columnSpan([
                        'default' => 3,
                        'lg' => 1,
                    ]),
            ]);
    }
}


