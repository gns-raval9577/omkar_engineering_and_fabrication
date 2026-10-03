<?php

namespace App\Filament\Admin\Resources\Galleries;

use App\Filament\Admin\Resources\Galleries\Pages\CreateGallery;
use App\Filament\Admin\Resources\Galleries\Pages\EditGallery;
use App\Filament\Admin\Resources\Galleries\Pages\ListGalleries;
use App\Filament\Admin\Resources\Galleries\Schemas\GalleryForm;
use App\Filament\Admin\Resources\Galleries\Tables\GalleryTable;
use App\Models\Gallery;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedPhoto;

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $navigationLabel = 'Gallery';

    protected static ?string $modelLabel = 'Gallery Photo';

    protected static ?string $pluralModelLabel = 'Company Gallery';

    protected static ?int $navigationSort = 4;

    public static function form(Schema $schema): Schema
    {
        return GalleryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GalleryTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListGalleries::route('/'),
            'create' => CreateGallery::route('/create'),
            'edit' => EditGallery::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
