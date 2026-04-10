<?php

namespace App\Filament\Admin\Resources\Galleries\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpan(1),

                FileUpload::make('image')
                    ->label('Gallery Image')
                    ->image()
                    ->directory('gallery-image')
                    ->imagePreviewHeight('100')
                    ->maxSize(1024)
                    ->columnSpan(1),
            ]);
    }
}
