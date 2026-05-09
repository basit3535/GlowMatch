<?php
namespace App\Filament\Resources\PageCategories;

use App\Filament\Resources\PageCategories\Pages\CreatePageCategory;
use App\Filament\Resources\PageCategories\Pages\EditPageCategory;
use App\Filament\Resources\PageCategories\Pages\ListPageCategories;
use App\Filament\Resources\PageCategories\Pages\ViewPageCategory;
use App\Filament\Resources\PageCategories\Schemas\PageCategoryInfolist;
use App\Filament\Resources\PageCategories\Tables\PageCategoriesTable;
use App\Models\PageCategory;
use BackedEnum;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class PageCategoryResource extends Resource
{
    protected static ?string $model = PageCategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static string|UnitEnum|null $navigationGroup  = 'Content Management';
    protected static ?string $navigationLabel                   = 'Page Categories';
    protected static ?string $modelLabel                        = 'Page Category';
    protected static ?string $pluralModelLabel                  = 'Page Categories';
    protected static ?int $navigationSort                       = 3;
    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make('Basic Information')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('name')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn($state, Set $set) => $set('slug', str()->slug($state)))
                                    ->debounce(500), // Add debounce to prevent too many updates

                                TextInput::make('slug')
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(ignoreRecord: true)
                                    ->helperText('URL-friendly version of the name.')
                                    ->readOnly(true)
                                    ->default(function ($get) {
                                        // If slug is empty when form loads, generate from name
                                        if ($get('name')) {
                                            return str()->slug($get('name'));
                                        }
                                        return null;
                                    }),

                                Select::make('parent_id')
                                    ->label('Parent Category')
                                    ->relationship('parent', 'name')
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

    public static function infolist(Schema $schema): Schema
    {
        return PageCategoryInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PageCategoriesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index'  => ListPageCategories::route('/'),
            'create' => CreatePageCategory::route('/create'),
            'view'   => ViewPageCategory::route('/{record}'),
            'edit'   => EditPageCategory::route('/{record}/edit'),
        ];
    }
}
