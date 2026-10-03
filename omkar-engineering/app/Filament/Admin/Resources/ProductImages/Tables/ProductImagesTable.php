<?php

namespace App\Filament\Admin\Resources\ProductImages\Tables;

use App\Models\ProductImages;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Support\Enums\FontWeight;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class ProductImagesTable
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

                TextColumn::make('product.title')
                    ->label('Product')
                    ->badge()
                    ->color('info')
                    ->searchable()
                    ->sortable()
                    ->weight(FontWeight::SemiBold),

                TextColumn::make('title')
                    ->label('Image Title / Caption')
                    ->searchable()
                    ->sortable()
                    ->weight(FontWeight::Medium)
                    ->placeholder('Untitled Photo'),

                TextColumn::make('created_at')
                    ->label('Uploaded At')
                    ->dateTime('M d, Y · h:i A')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('product_id')
                    ->label('Filter by Product')
                    ->relationship('product', 'title')
                    ->searchable()
                    ->preload(),
                TrashedFilter::make(),
            ])
            ->recordActions([
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
            ->emptyStateHeading('No Gallery Images Found')
            ->emptyStateDescription('Upload multi-image galleries for your fabrication products to display them on the website.')
            ->emptyStateIcon(Heroicon::OutlinedPhoto);
    }
}
