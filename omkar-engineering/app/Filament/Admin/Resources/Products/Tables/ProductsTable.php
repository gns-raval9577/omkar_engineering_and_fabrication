<?php

namespace App\Filament\Admin\Resources\Products\Tables;

use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn (Builder $query): Builder => $query->latest('updated_at'))
            ->paginated([10, 25, 50])
            ->defaultPaginationPageOption(10)
            ->deferLoading()
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->weight(FontWeight::Medium),
                TextColumn::make('slug')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('description')
                    ->formatStateUsing(fn (?string $state): string => Str::of(strip_tags($state ?? ''))->squish()->toString())
                    ->limit(80)
                    ->wrap()
                    ->tooltip(fn ($state): ?string => filled($state) ? Str::of(strip_tags($state))->squish()->toString() : null),
                TextColumn::make('sort_description')
                    ->label('Short Description')
                    ->formatStateUsing(fn (?string $state): string => Str::of(strip_tags($state ?? ''))->squish()->toString())
                    ->limit(50)
                    ->toggleable(isToggledHiddenByDefault: true),
                ImageColumn::make('image')
                    ->circular()
                    ->size(48),
                TextColumn::make('updated_at')
                    ->label('Last modified at')
                    ->date(),
            ])
            ->recordActions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ])
            ->groupedBulkActions([
                DeleteBulkAction::make()
            ]);
    }
}
