<?php

namespace App\Filament\Admin\Resources\Projects\Schemas;

use App\Models\Project;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(3)
            ->components([
                // Left 2 Columns: Core Project Information & Details
                Section::make('Project Information')
                    ->description('Primary titles, categorization, location, and write-ups.')
                    ->icon(Heroicon::OutlinedBuildingOffice2)
                    ->schema([
                        TextInput::make('title')
                            ->label('Project Title *')
                            ->placeholder('e.g., Heavy Structural Shed Fabrication')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                        TextInput::make('slug')
                            ->label('URL Slug *')
                            ->placeholder('e.g., heavy-structural-shed-fabrication')
                            ->disabled()
                            ->dehydrated()
                            ->required()
                            ->maxLength(255)
                            ->unique(Project::class, 'slug', ignoreRecord: true)
                            ->helperText('Clean URL used for public project details: /project-details/{slug}'),

                        TextInput::make('location')
                            ->label('Location / City')
                            ->placeholder('e.g., Sanand GIDC, Ahmedabad')
                            ->maxLength(255)
                            ->helperText('Displayed alongside the title (e.g., Title in Sanand GIDC).'),

                        TextInput::make('category')
                            ->label('Category / Sector')
                            ->placeholder('e.g., Structural Steel, Industrial Shed, Machine Fabrication')
                            ->maxLength(255),

                        TextInput::make('client')
                            ->label('Client Name / Company')
                            ->placeholder('e.g., Tata Motors Vendor / Industrial Plant Corp')
                            ->maxLength(255),

                        TextInput::make('project_date')
                            ->label('Completion Date')
                            ->placeholder('e.g., 26 October, 2026')
                            ->maxLength(100),

                        Select::make('icon')
                            ->label('Project Badge Icon')
                            ->options([
                                'norc-factory' => 'Factory (norc-factory)',
                                'norc-new-construction' => 'Construction / Crane (norc-new-construction)',
                                'norc-construction-sign' => 'Building / Helmet (norc-construction-sign)',
                                'norc-radiation' => 'Energy / Solar (norc-radiation)',
                                'norc-cogwheel' => 'Machinery / Cog (norc-cogwheel)',
                                'norc-wrench' => 'Wrench / Tools (norc-wrench)',
                            ])
                            ->default('norc-factory')
                            ->helperText('Displayed on the project card badge on the /project page.'),

                        TextInput::make('website_url')
                            ->label('External Project / Client URL (Optional)')
                            ->placeholder('https://...')
                            ->url()
                            ->maxLength(255),

                        Textarea::make('sort_description')
                            ->label('Short Overview / Card Summary *')
                            ->placeholder('A concise 1-2 sentence overview displayed on the alternating project card on /project...')
                            ->required()
                            ->rows(3)
                            ->maxLength(500)
                            ->columnSpanFull()
                            ->helperText('Displayed on the /project catalog card (recommended: 100–160 characters).'),

                        Textarea::make('description')
                            ->label('Full Project Description & Technical Scope')
                            ->placeholder('Comprehensive information regarding fabrication scope, engineering specs, tonnage, and on-site assembly...')
                            ->rows(6)
                            ->columnSpanFull(),

                        TagsInput::make('included_items')
                            ->label('What was included in the project? (Deliverable Points)')
                            ->placeholder('Add deliverable and press Enter...')
                            ->columnSpanFull()
                            ->helperText('Each item will be displayed as a numbered point in the deliverables list on the project details page.'),
                    ])
                    ->columns(2)
                    ->columnSpan(2),

                // Right 1 Column: Media & Layout Precision Sizing
                Section::make('Project Media & Sizing')
                    ->description('Images formatted precisely for the website layout.')
                    ->icon(Heroicon::OutlinedPhoto)
                    ->schema([
                        FileUpload::make('image')
                            ->label('Featured Cover Image * (16:10 Ratio)')
                            ->disk('public')
                            ->directory('projects')
                            ->image()
                            ->imageEditor()
                            ->imageCropAspectRatio('16:10')
                            ->imageEditorAspectRatios([
                                '16:10',
                                '3:2',
                                '16:9',
                                null,
                            ])
                            ->maxSize(5120)
                            ->required()
                            ->helperText('Aspect Ratio: 16:10 (~1200×800px). Fits the alternating project showcase box perfectly without stretching or cutoff.')
                            ->columnSpanFull(),

                        FileUpload::make('slider_images')
                            ->label('Header Banner Photos (16:9 Banner)')
                            ->disk('public')
                            ->directory('projects/slider')
                            ->image()
                            ->multiple()
                            ->reorderable()
                            ->imageEditor()
                            ->imageCropAspectRatio('16:9')
                            ->maxSize(6144)
                            ->helperText('Multiple panoramic photos for the top full-width carousel on /project-details. Recommended: 1920×1080px (16:9).')
                            ->columnSpanFull(),

                        FileUpload::make('gallery_images')
                            ->label('In-Content Showcase Gallery (4:3 Ratio)')
                            ->disk('public')
                            ->directory('projects/gallery')
                            ->image()
                            ->multiple()
                            ->reorderable()
                            ->imageEditor()
                            ->imageCropAspectRatio('4:3')
                            ->maxSize(5120)
                            ->helperText('Displayed in the 2-column zoomable photo grid. Recommended: 800×600px (4:3).')
                            ->columnSpanFull(),

                        Toggle::make('is_active')
                            ->label('Published & Visible')
                            ->default(true)
                            ->helperText('Toggle whether this project is displayed on the public website.'),

                        TextInput::make('sort_order')
                            ->label('Display Order')
                            ->numeric()
                            ->default(0)
                            ->helperText('Lower numbers appear first (e.g. 1, 2, 3...).'),

                        Placeholder::make('sizing_guidelines')
                            ->label('Design Fit Guidelines')
                            ->content(new HtmlString('
                                <div class="text-xs text-gray-500 dark:text-gray-400 space-y-1.5 pt-2">
                                    <p>• <strong>Project Card Image:</strong> Use <strong>16:10</strong> ratio (~1200×800px or 1000×667px). The template automatically aligns this with the alternating card text.</p>
                                    <p>• <strong>Header Slider:</strong> Wide <strong>16:9</strong> landscape banner images (~1920×1080px) for maximum visual impact.</p>
                                    <p>• <strong>Gallery Grid:</strong> Standard <strong>4:3</strong> or 3:2 photos for the in-depth project photo grid.</p>
                                </div>
                            '))
                            ->columnSpanFull(),
                    ])
                    ->columnSpan(1),
            ]);
    }
}
