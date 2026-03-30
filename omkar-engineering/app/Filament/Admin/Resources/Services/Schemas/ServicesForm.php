<?php

namespace App\Filament\Admin\Resources\Services\Schemas;

use Filament\Schemas\Schema;
use App\Models\Services;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Str;

class ServicesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
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
                    ->unique(Services::class, 'slug', ignoreRecord: true),

                RichEditor::make('description')
                    ->required()
                    ->columnSpan(1),

                RichEditor::make('sort_description')
                    ->nullable()
                    ->columnSpan(1),

                FileUpload::make('image')
                    ->label('Service Image')
                    ->image() // only image
                    ->directory('services-image') // storage/app/public/services-icons
                    ->imagePreviewHeight('100')
                    ->maxSize(1024)
                    ->columnSpan(1), // 1MB
            ]);
    }
}
