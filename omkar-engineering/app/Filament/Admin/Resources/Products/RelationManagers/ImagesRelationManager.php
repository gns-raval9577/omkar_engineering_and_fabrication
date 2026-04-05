<?php

namespace App\Filament\Admin\Resources\Products\RelationManagers;

use App\Models\ProductImages;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class ImagesRelationManager extends RelationManager
{
    protected static string $relationship = 'images';

    protected static ?string $title = 'Product Images';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->multiple(fn (string $operation): bool => $operation === 'create')
                    ->directory('product-images')
                    ->imagePreviewHeight('100')
                    ->required()
                    ->maxSize(1024),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->modifyQueryUsing(fn (Builder $query): Builder => $query->latest('updated_at'))
            ->paginated([10, 25, 50])
            ->defaultPaginationPageOption(10)
            ->deferLoading()
            ->columns([
                ImageColumn::make('image')
                    ->square()
                    ->size(80),
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->weight(FontWeight::Medium),
                TextColumn::make('updated_at')
                    ->label('Last modified')
                    ->dateTime('d M Y h:i A')
                    ->sortable(),
            ])
            ->headerActions([
                CreateAction::make()
                    ->label('Add Product Images')
                    ->using(function (array $data, ImagesRelationManager $livewire): Model {
                        $images = array_values(array_filter(Arr::wrap($data['image'] ?? [])));

                        return DB::transaction(function () use ($data, $images, $livewire): Model {
                            $record = $livewire->getRelationship()->create([
                                'title' => $data['title'],
                                'image' => $images[0] ?? null,
                            ]);

                            foreach (array_slice($images, 1) as $image) {
                                $livewire->getRelationship()->create([
                                    'title' => $data['title'],
                                    'image' => $image,
                                ]);
                            }

                            return $record;
                        });
                    }),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make()
                    ->label('Edit Image'),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                DeleteBulkAction::make(),
            ]);
    }
}
