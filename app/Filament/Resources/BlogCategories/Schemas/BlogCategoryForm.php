<?php
namespace App\Filament\Resources\BlogCategories\Schemas;

use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;

class BlogCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //

                Section::make('Basic Information')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('title')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn($state, Set $set) => $set('slug', str()->slug($state)))
                                    ->debounce(500), // Add debounce to prevent too many updates

                                TextInput::make('slug')
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(ignoreRecord: true)
                                    ->helperText('URL-friendly version of the title.')
                                    ->readOnly(true)
                                    ->default(function ($get) {
                                        // If slug is empty when form loads, generate from title
                                        if ($get('title')) {
                                            return str()->slug($get('title'));
                                        }
                                        return null;
                                    }),

                                Select::make('parent_id')
                                    ->label('Parent Category')
                                    ->relationship('parent', 'title')
                                    ->searchable()
                                    ->preload()
                                    ->helperText('Select parent category for hierarchy.'),

                                TextInput::make('order')
                                    ->numeric()
                                    ->default(0)
                                    ->helperText('Categories with lower numbers appear first.'),

                                Toggle::make('is_active')
                                    ->label('Active')
                                    ->default(true)
                                    ->helperText('Inactive categories will not appear on frontend.'),
                            ]),

                        Grid::make(2)
                            ->schema([
                                ColorPicker::make('color')
                                    ->helperText('Color code for category styling.'),
                                FileUpload::make('icon')
                                    ->label('Upload Media')
                                    ->image()
                                    ->disk('local')
                                    ->directory('livewire-tmp')
                                    ->visibility('private')
                                    ->required()
                                    ->preserveFilenames(),
                            ]),

                        Textarea::make('description')
                            ->rows(5)
                            ->helperText('Brief description of the category.'),
                    ]),
            ])->columns(1);
    }
}
