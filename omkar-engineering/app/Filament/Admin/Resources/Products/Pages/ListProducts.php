<?php

namespace App\Filament\Admin\Resources\Products\Pages;

use App\Filament\Admin\Resources\Products\ProductResource;
use App\Models\Product;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Support\Icons\Heroicon;
use Illuminate\Database\Eloquent\Builder;

class ListProducts extends ListRecords
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('New Product')
                ->icon(Heroicon::OutlinedPlusCircle),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make('All Products')
                ->badge(Product::count())
                ->modifyQueryUsing(fn (Builder $query) => $query->withoutTrashed()),
            'trash' => Tab::make('Archived')
                ->badge(Product::onlyTrashed()->count())
                ->modifyQueryUsing(fn (Builder $query) => $query->onlyTrashed()),
        ];
    }
}
