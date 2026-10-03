<?php

namespace App\Filament\Admin\Resources\Galleries\Tables;

use App\Models\Gallery;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Support\Enums\FontWeight;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class GalleryTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Thumbnail')
                    ->disk('public')
                    ->square()
                    ->size(54)
                    ->extraImgAttributes([
                        'class' => 'rounded-lg object-cover shadow-xs border border-slate-200 dark:border-slate-700',
                    ]),

                TextColumn::make('title')
                    ->label('Photo Title / Event')
                    ->searchable()
                    ->sortable()
                    ->weight(FontWeight::SemiBold)
                    ->description(fn (Gallery $record) => $record->description ? Str::limit($record->description, 50) : null)
                    ->placeholder('Untitled Photo'),

                TextColumn::make('category')
                    ->label('Category')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'company' => 'info',
                        'celebration' => 'warning',
                        'achievement' => 'success',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'company' => '🏢 Company',
                        'celebration' => '🎉 Celebration',
                        'achievement' => '🏆 Achievement',
                        default => '📸 ' . ucfirst($state),
                    })
                    ->searchable()
                    ->sortable(),

                IconColumn::make('is_active')
                    ->label('Published')
                    ->boolean()
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Uploaded At')
                    ->dateTime('M d, Y · h:i A')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('category')
                    ->label('Filter by Category')
                    ->options([
                        'company' => '🏢 Company & Infrastructure',
                        'celebration' => '🎉 Celebrations & Events',
                        'achievement' => '🏆 Achievements & Milestones',
                        'other' => '📸 Other Moments',
                    ]),
                TernaryFilter::make('is_active')
                    ->label('Publication Status')
                    ->placeholder('All Photos')
                    ->trueLabel('Published Only')
                    ->falseLabel('Drafts Only'),
                TrashedFilter::make(),
            ])
            ->recordActions([
                ViewAction::make()
                    ->slideOver(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ])
            ->emptyStateHeading('No Gallery Photos Found')
            ->emptyStateDescription('Upload company moments, celebration photos, and achievements to showcase in your website gallery.')
            ->emptyStateIcon(Heroicon::OutlinedPhoto);
    }
}
