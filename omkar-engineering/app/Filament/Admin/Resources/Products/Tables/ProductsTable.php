<?php

namespace App\Filament\Admin\Resources\Products\Tables;

use App\Filament\Admin\Resources\Products\ProductResource;
use App\Models\Product;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Support\Enums\FontWeight;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Image')
                    ->disk('public')
                    ->square()
                    ->size(50)
                    ->defaultImageUrl(asset('template/img/favicon.png'))
                    ->extraImgAttributes([
                        'class' => 'rounded-xl object-cover ring-1 ring-gray-200 dark:ring-gray-700 shadow-sm',
                        'alt' => 'Product Thumbnail',
                    ]),

                TextColumn::make('title')
                    ->label('Product')
                    ->searchable()
                    ->sortable()
                    ->weight(FontWeight::SemiBold)
                    ->description(fn (Product $record): ?string => Str::limit($record->sort_description ?: $record->description, 60))
                    ->wrap(),

                TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable()
                    ->badge()
                    ->color('gray')
                    ->copyable()
                    ->copyMessage('Slug copied to clipboard')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('description')
                    ->label('Full Description')
                    ->limit(65)
                    ->wrap()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime('M j, Y, g:i a')
                    ->sortable()
                    ->toggleable(),

                TextColumn::make('created_at')
                    ->label('Created On')
                    ->dateTime('M j, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('updated_at', 'desc')
            ->filters([
                // Handled via tabs (All Products / Archived)
            ])
            ->recordActions([
                ActionGroup::make([
                    ViewAction::make()
                        ->slideOver()
                        ->icon(Heroicon::OutlinedEye)
                        ->color('info'),
                    EditAction::make()
                        ->icon(Heroicon::OutlinedPencilSquare)
                        ->color('primary'),
                    DeleteAction::make()
                        ->icon(Heroicon::OutlinedTrash)
                        ->color('danger'),
                    RestoreAction::make()
                        ->icon(Heroicon::OutlinedArrowPath)
                        ->color('success'),
                    ForceDeleteAction::make()
                        ->icon(Heroicon::OutlinedXCircle)
                        ->color('danger'),
                ])
                ->tooltip('Product Actions'),
            ])
            ->groupedBulkActions([
                DeleteBulkAction::make(),
                RestoreBulkAction::make(),
                ForceDeleteBulkAction::make(),
            ])
            ->emptyStateHeading('No products found')
            ->emptyStateDescription('Your catalog is currently empty. Add your first product to get started.')
            ->emptyStateIcon(Heroicon::OutlinedShoppingBag)
            ->emptyStateActions([
                Action::make('create')
                    ->label('Add New Product')
                    ->icon(Heroicon::OutlinedPlusCircle)
                    ->url(fn (): string => ProductResource::getUrl('create')),
            ]);
    }
}
