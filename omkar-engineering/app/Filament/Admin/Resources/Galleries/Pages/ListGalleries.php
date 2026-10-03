<?php

namespace App\Filament\Admin\Resources\Galleries\Pages;

use App\Filament\Admin\Resources\Galleries\GalleryResource;
use App\Models\Gallery;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Support\Icons\Heroicon;
use Illuminate\Database\Eloquent\Builder;

class ListGalleries extends ListRecords
{
    protected static string $resource = GalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Upload Photos')
                ->icon(Heroicon::OutlinedPlusCircle),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make('All Photos')
                ->badge(Gallery::count())
                ->modifyQueryUsing(fn (Builder $query) => $query->withoutTrashed()),
            'company' => Tab::make('🏢 Company')
                ->badge(Gallery::where('category', 'company')->count())
                ->modifyQueryUsing(fn (Builder $query) => $query->withoutTrashed()->where('category', 'company')),
            'celebration' => Tab::make('🎉 Celebrations')
                ->badge(Gallery::where('category', 'celebration')->count())
                ->modifyQueryUsing(fn (Builder $query) => $query->withoutTrashed()->where('category', 'celebration')),
            'achievement' => Tab::make('🏆 Achievements')
                ->badge(Gallery::where('category', 'achievement')->count())
                ->modifyQueryUsing(fn (Builder $query) => $query->withoutTrashed()->where('category', 'achievement')),
            'trash' => Tab::make('Archived')
                ->badge(Gallery::onlyTrashed()->count())
                ->modifyQueryUsing(fn (Builder $query) => $query->onlyTrashed()),
        ];
    }
}
