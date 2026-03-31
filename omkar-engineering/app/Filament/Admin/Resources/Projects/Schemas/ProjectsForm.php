<?php

namespace App\Filament\Admin\Resources\Projects\Schemas;

use App\Models\Project;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProjectsForm
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
                    ->unique(Project::class, 'slug', ignoreRecord: true),

                RichEditor::make('description')
                    ->required()
                    ->columnSpan(1),

                RichEditor::make('sort_description')
                    ->nullable()
                    ->columnSpan(1),

                FileUpload::make('image')
                    ->label('Project Image')
                    ->image()
                    ->directory('projects-image')
                    ->imagePreviewHeight('100')
                    ->maxSize(1024)
                    ->columnSpan(1),
            ]);
    }
}
