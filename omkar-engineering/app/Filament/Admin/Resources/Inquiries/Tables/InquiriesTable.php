<?php

namespace App\Filament\Admin\Resources\Inquiries\Tables;

use App\Models\Inquiry;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Support\Enums\FontWeight;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class InquiriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('name')
                    ->label('Client Name')
                    ->searchable()
                    ->sortable()
                    ->weight(FontWeight::SemiBold),

                TextColumn::make('phone')
                    ->label('Mobile / WhatsApp')
                    ->searchable()
                    ->copyable()
                    ->copyMessage('Phone number copied')
                    ->icon(Heroicon::OutlinedPhone)
                    ->url(fn (Inquiry $record) => "tel:{$record->phone}"),

                TextColumn::make('email')
                    ->label('Email Address')
                    ->searchable()
                    ->copyable()
                    ->copyMessage('Email copied')
                    ->icon(Heroicon::OutlinedEnvelope)
                    ->url(fn (Inquiry $record) => "mailto:{$record->email}"),

                TextColumn::make('service')
                    ->label('Service Required')
                    ->badge()
                    ->color('info')
                    ->searchable()
                    ->sortable()
                    ->placeholder('General Inquiry'),

                TextColumn::make('subject')
                    ->label('Subject / Project')
                    ->limit(28)
                    ->searchable()
                    ->tooltip(fn (Inquiry $record): string => $record->subject ?? ''),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->colors([
                        'danger' => 'new',
                        'warning' => 'contacted',
                        'primary' => 'in_progress',
                        'success' => 'completed',
                        'gray' => 'closed',
                    ])
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'new' => 'New Lead',
                        'contacted' => 'Contacted',
                        'in_progress' => 'Quote Sent',
                        'completed' => 'Completed',
                        'closed' => 'Closed',
                        default => ucfirst($state),
                    })
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Received Date')
                    ->dateTime('d M Y, h:i A')
                    ->sortable(),

                TextColumn::make('ip_address')
                    ->label('IP')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('Inquiry Status')
                    ->options([
                        'new' => 'New Lead',
                        'contacted' => 'Contacted',
                        'in_progress' => 'Quote Sent',
                        'completed' => 'Completed',
                        'closed' => 'Closed',
                    ]),

                SelectFilter::make('service')
                    ->label('Service Type')
                    ->options(fn () => Inquiry::query()->whereNotNull('service')->pluck('service', 'service')->unique()->toArray()),

                TrashedFilter::make(),
            ])
            ->recordActions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),

                    Action::make('whatsapp')
                        ->label('Chat on WhatsApp')
                        ->icon(Heroicon::OutlinedChatBubbleOvalLeftEllipsis)
                        ->color('success')
                        ->url(function (Inquiry $record) {
                            $cleanPhone = preg_replace('/[^0-9]/', '', $record->phone);
                            if (strlen($cleanPhone) === 10) {
                                $cleanPhone = '91' . $cleanPhone;
                            }
                            $text = "Hello {$record->name}, greeting from Omkar Engineering & Fabrication! We received your quotation inquiry regarding: {$record->subject}.";
                            return "https://wa.me/{$cleanPhone}?text=" . urlencode($text);
                        })
                        ->openUrlInNewTab(),

                    Action::make('call')
                        ->label('Direct Call')
                        ->icon(Heroicon::OutlinedPhone)
                        ->color('primary')
                        ->url(fn (Inquiry $record) => "tel:{$record->phone}"),

                    DeleteAction::make(),
                ]),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
