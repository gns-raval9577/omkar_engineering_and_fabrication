<?php

namespace App\Filament\Admin\Resources\Galleries\Schemas;

use App\Models\Gallery;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                // Card 1: Category & Details
                Section::make('1. Gallery Category & Information')
                    ->description('Select the category and enter an optional caption or title.')
                    ->icon(Heroicon::OutlinedTag)
                    ->schema([
                        Select::make('category')
                            ->label('Gallery Category *')
                            ->options([
                                'company' => '🏢 Company & Infrastructure (Factory, Machinery, Workshop)',
                                'celebration' => '🎉 Celebrations & Events (Diwali, Annual Day, Gatherings)',
                                'achievement' => '🏆 Achievements & Milestones (Certificates, Awards, Milestones)',
                                'other' => '📸 Other Moments',
                            ])
                            ->default('company')
                            ->required()
                            ->native(false)
                            ->helperText('Choose which gallery category these photos belong to.')
                            ->validationMessages([
                                'required' => 'Please select a gallery category.',
                            ]),

                        TextInput::make('title')
                            ->label('Photo Title / Event Name (Optional)')
                            ->placeholder('e.g., Annual Diwali Celebration 2026, ISO Certification Award...')
                            ->maxLength(255)
                            ->helperText('Optional. If left blank, photos are auto-named with the category name.'),

                        Textarea::make('description')
                            ->label('Description / Event Notes (Optional)')
                            ->placeholder('Brief note about this event, machine, celebration, or achievement...')
                            ->rows(2)
                            ->maxLength(500)
                            ->columnSpanFull(),

                        Toggle::make('is_active')
                            ->label('Publish to Website')
                            ->default(true)
                            ->helperText('Visible on the public website gallery when enabled.')
                            ->columnSpanFull(),
                    ])
                    ->columns([
                        'default' => 1,
                        'md' => 2,
                    ]),

                // Card 2: Multi-Upload Media
                Section::make('2. Upload Gallery Photos')
                    ->description('Drag & drop or select multiple photos to upload in one shot.')
                    ->icon(Heroicon::OutlinedCloudArrowUp)
                    ->schema([
                        // Multi-file uploader on Create
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
                            ->directory('gallery')
                            ->maxSize(10240)
                            ->required(fn (string $operation) => $operation === 'create')
                            ->helperText('Select or drag & drop multiple images (JPG, PNG, WebP up to 10MB each). Click the pencil icon on any thumbnail to crop.')
                            ->validationMessages([
                                'required' => 'Please select at least one photo to upload.',
                            ])
                            ->visible(fn (string $operation) => $operation === 'create')
                            ->columnSpanFull(),

                        // Single file uploader on Edit
                        FileUpload::make('image')
                            ->label('Replace Photo')
                            ->image()
                            ->imageEditor()
                            ->imagePreviewHeight('200')
                            ->disk('public')
                            ->directory('gallery')
                            ->maxSize(10240)
                            ->helperText('Upload a new photo to replace this specific gallery image.')
                            ->visible(fn (string $operation) => $operation === 'edit')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
