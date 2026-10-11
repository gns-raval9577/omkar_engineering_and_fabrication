<?php

namespace App\Filament\Admin\Resources\Inquiries\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class InquiryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(3)
            ->components([
                // Left 2 Columns: Client Inquiry Details
                Section::make('Inquiry & Project Details')
                    ->description('Details submitted by the prospective client.')
                    ->icon(Heroicon::OutlinedDocumentText)
                    ->schema([
                        TextInput::make('name')
                            ->label('Client Name *')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('email')
                            ->label('Email Address *')
                            ->email()
                            ->required()
                            ->maxLength(255),

                        TextInput::make('phone')
                            ->label('Contact / WhatsApp Number *')
                            ->tel()
                            ->required()
                            ->maxLength(50),

                        TextInput::make('service')
                            ->label('Service of Interest')
                            ->maxLength(255),

                        TextInput::make('subject')
                            ->label('Project Title / Subject *')
                            ->required()
                            ->columnSpanFull()
                            ->maxLength(255),

                        Textarea::make('message')
                            ->label('Project Description & Requirements *')
                            ->required()
                            ->rows(5)
                            ->columnSpanFull(),
                    ])
                    ->columnSpan(2),

                // Right 1 Column: Admin Management & Follow-up
                Section::make('Status & Follow-up')
                    ->description('Track and update inquiry lead status.')
                    ->icon(Heroicon::OutlinedClipboardDocumentCheck)
                    ->schema([
                        Select::make('status')
                            ->label('Inquiry Status *')
                            ->required()
                            ->options([
                                'new' => 'New Lead',
                                'contacted' => 'Contacted / Followed Up',
                                'in_progress' => 'Quotation Sent / In Progress',
                                'completed' => 'Deal Closed / Completed',
                                'closed' => 'Closed / Not Interested',
                            ])
                            ->default('new'),

                        Textarea::make('admin_notes')
                            ->label('Internal Admin Notes')
                            ->placeholder('e.g., Quoted ₹4.5L for structural shed; client requested revision on Friday...')
                            ->rows(6)
                            ->columnSpanFull()
                            ->helperText('Notes visible only to administrators.'),

                        TextInput::make('ip_address')
                            ->label('Sender IP Address')
                            ->disabled()
                            ->dehydrated(false),
                    ])
                    ->columnSpan(1),
            ]);
    }
}
