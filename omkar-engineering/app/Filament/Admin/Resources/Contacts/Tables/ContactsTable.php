<?php

namespace App\Filament\Admin\Resources\Contacts\Tables;

use App\Models\Contact;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class ContactsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->weight(FontWeight::Medium),
                TextColumn::make('email')
                    ->searchable()
                    ->sortable()
                    ->copyable(),
                TextColumn::make('phone')
                    ->searchable()
                    ->sortable()
                    ->copyable(),
                TextColumn::make('subject')
                    ->searchable()
                    ->sortable()
                    ->badge(),
                TextColumn::make('message')
                    ->formatStateUsing(fn (?string $state): string => Str::of($state ?? '')->squish()->toString())
                    ->searchable()
                    ->limit(80)
                    ->wrap()
                    ->tooltip(fn (?string $state): ?string => filled($state) ? Str::of($state)->squish()->toString() : null),
                TextColumn::make('created_at')
                    ->label('Submitted At')
                    ->dateTime('d M Y, h:i A')
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->dateTime('d M Y, h:i A')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Filter::make('keyword')
                    ->label('Contact Details')
                    ->schema([
                        TextInput::make('value')
                            ->placeholder('Search name, email, phone, subject'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        $value = trim((string) ($data['value'] ?? ''));

                        if ($value === '') {
                            return $query;
                        }

                        return $query->where(function (Builder $query) use ($value): Builder {
                            return $query
                                ->where('name', 'like', "%{$value}%")
                                ->orWhere('email', 'like', "%{$value}%")
                                ->orWhere('phone', 'like', "%{$value}%")
                                ->orWhere('subject', 'like', "%{$value}%")
                                ->orWhere('message', 'like', "%{$value}%");
                        });
                    }),
                SelectFilter::make('subject')
                    ->options(fn (): array => Contact::query()
                        ->whereNotNull('subject')
                        ->where('subject', '!=', '')
                        ->orderBy('subject')
                        ->pluck('subject', 'subject')
                        ->all())
                    ->searchable(),
                Filter::make('submitted_at')
                    ->schema([
                        DatePicker::make('from'),
                        DatePicker::make('until'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                filled($data['from'] ?? null),
                                fn (Builder $query): Builder => $query->whereDate('created_at', '>=', $data['from']),
                            )
                            ->when(
                                filled($data['until'] ?? null),
                                fn (Builder $query): Builder => $query->whereDate('created_at', '<=', $data['until']),
                            );
                    }),
            ])
            ->filtersFormColumns(2);
    }
}
