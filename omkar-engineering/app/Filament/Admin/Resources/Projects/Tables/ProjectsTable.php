<?php

namespace App\Filament\Admin\Resources\Projects\Tables;

use App\Models\Project;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Support\Enums\FontWeight;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class ProjectsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order', 'asc')
            ->columns([
                ImageColumn::make('image')
                    ->label('Thumbnail')
                    ->disk('public')
                    ->width(80)
                    ->height(50)
                    ->extraImgAttributes(['class' => 'rounded object-cover shadow-sm'])
                    ->state(fn (Project $record) => $record->image_url),

                TextColumn::make('title')
                    ->label('Project Title')
                    ->searchable()
                    ->sortable()
                    ->weight(FontWeight::SemiBold),

                TextColumn::make('location')
                    ->label('Location')
                    ->searchable()
                    ->placeholder('N/A'),

                TextColumn::make('category')
                    ->label('Category')
                    ->badge()
                    ->color('info')
                    ->searchable()
                    ->placeholder('General'),

                TextColumn::make('client')
                    ->label('Client')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('sort_order')
                    ->label('Order')
                    ->numeric()
                    ->sortable(),

                ToggleColumn::make('is_active')
                    ->label('Visible')
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->date()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('category')
                    ->options(fn () => Project::query()->whereNotNull('category')->pluck('category', 'category')->unique()->toArray()),

                TrashedFilter::make(),
            ])
            ->recordActions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),

                    Action::make('view_live')
                        ->label('View on Site')
                        ->icon(Heroicon::OutlinedArrowTopRightOnSquare)
                        ->color('primary')
                        ->url(fn (Project $record) => route('project-details', $record->slug))
                        ->openUrlInNewTab(),

                    DeleteAction::make(),
                ]),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
