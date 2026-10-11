<?php

namespace App\Filament\Admin\Resources\Inquiries\Schemas;

use App\Models\Inquiry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class InquiryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(3)
            ->components([
                Section::make('Client & Contact Information')
                    ->icon(Heroicon::OutlinedUser)
                    ->schema([
                        TextEntry::make('name')
                            ->label('Client Name'),
                        TextEntry::make('phone')
                            ->label('Phone / WhatsApp')
                            ->copyable()
                            ->url(fn (Inquiry $record) => "tel:{$record->phone}"),
                        TextEntry::make('email')
                            ->label('Email Address')
                            ->copyable()
                            ->url(fn (Inquiry $record) => "mailto:{$record->email}"),
                        TextEntry::make('created_at')
                            ->label('Date Received')
                            ->dateTime('d M Y, h:i A'),
                    ])
                    ->columns(2)
                    ->columnSpan(2),

                Section::make('Lead Status & Tracking')
                    ->icon(Heroicon::OutlinedClipboardDocumentCheck)
                    ->schema([
                        TextEntry::make('status')
                            ->label('Current Status')
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
                            }),
                        TextEntry::make('ip_address')
                            ->label('IP Address'),
                        TextEntry::make('admin_notes')
                            ->label('Internal Admin Notes')
                            ->placeholder('No notes added yet.')
                            ->columnSpanFull(),
                    ])
                    ->columnSpan(1),

                Section::make('Project Scope & Specification')
                    ->icon(Heroicon::OutlinedWrenchScrewdriver)
                    ->schema([
                        TextEntry::make('service')
                            ->label('Service Required')
                            ->badge()
                            ->color('info')
                            ->placeholder('General / Not Specified'),
                        TextEntry::make('subject')
                            ->label('Project Title / Subject'),
                        TextEntry::make('message')
                            ->label('Full Inquiry Message')
                            ->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),
            ]);
    }
}
