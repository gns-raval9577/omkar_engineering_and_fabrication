<?php

namespace App\Filament\Admin\Resources\Projects\Schemas;

use App\Models\Project;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ProjectInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(3)
            ->components([
                Section::make('General Information')
                    ->icon(Heroicon::OutlinedBuildingOffice2)
                    ->schema([
                        TextEntry::make('title')
                            ->label('Project Title'),
                        TextEntry::make('slug')
                            ->label('Slug / URL'),
                        TextEntry::make('location')
                            ->label('Location'),
                        TextEntry::make('category')
                            ->label('Category')
                            ->badge()
                            ->color('info'),
                        TextEntry::make('client')
                            ->label('Client'),
                        TextEntry::make('project_date')
                            ->label('Project Date'),
                        TextEntry::make('website_url')
                            ->label('Website')
                            ->url(fn ($state) => $state)
                            ->openUrlInNewTab(),
                        IconEntry::make('is_active')
                            ->label('Published')
                            ->boolean(),
                        TextEntry::make('sort_description')
                            ->label('Short Overview')
                            ->columnSpanFull(),
                        TextEntry::make('description')
                            ->label('Full Technical Scope')
                            ->html()
                            ->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->columnSpan(2),

                Section::make('Media & Photos')
                    ->icon(Heroicon::OutlinedPhoto)
                    ->schema([
                        ImageEntry::make('image')
                            ->label('Featured Cover Photo')
                            ->disk('public')
                            ->state(fn (Project $record) => $record->image_url),
                        TextEntry::make('sort_order')
                            ->label('Display Order'),
                        TextEntry::make('created_at')
                            ->label('Created On')
                            ->dateTime('d M Y'),
                    ])
                    ->columnSpan(1),
            ]);
    }
}
