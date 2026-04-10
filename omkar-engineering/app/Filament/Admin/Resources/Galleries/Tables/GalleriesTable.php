<?php

namespace App\Filament\Admin\Resources\Galleries\Tables;

use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class GalleriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn (Builder $query): Builder => $query->latest('updated_at'))
            ->paginated([10, 25, 50])
            ->defaultPaginationPageOption(10)
            ->deferLoading()
            ->columns([
                TextColumn::make('id')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->weight(FontWeight::Medium)
                    ->toggleable(),
                ImageColumn::make('image')
                    ->label('Image')
                    ->size(56)
                    ->toggleable(),
                TextColumn::make('created_at')
                    ->label('Created at')
                    ->dateTime('d M Y h:i A')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('Last modified at')
                    ->dateTime('d M Y h:i A')
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('deleted_at')
                    ->label('Deleted at')
                    ->dateTime('d M Y h:i A')
                    ->sortable()
                    ->placeholder('-')
                    ->toggleable(isToggledHiddenByDefault: true),
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
