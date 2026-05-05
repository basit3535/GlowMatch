<?php
namespace App\Filament\Resources\CustomPages;

use App\Filament\Resources\CustomPages\Pages\CreateCustomPage;
use App\Filament\Resources\CustomPages\Pages\EditCustomPage;
use App\Filament\Resources\CustomPages\Pages\ListCustomPages;
use App\Models\CustomPage;
use App\Models\PageCategory;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
// use Filament\Tables\Columns\Set;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;
use Filament\Notifications\Notification;
class CustomPageResource extends Resource
{
    protected static ?string $model = CustomPage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static string|UnitEnum|null $navigationGroup  = 'Content Management';
    protected static ?string $navigationLabel                   = 'Custom Pages';
    protected static ?string $modelLabel                        = 'Custom Page';
    protected static ?string $pluralModelLabel                  = 'Custom Pages';
    protected static ?int $navigationSort                       = 1;

    public static function form(Schema $schema): Schema
    {
        // return CustomPageForm::configure($schema);
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
                                    ->afterStateUpdated(fn($state, Set $set) => $set('slug', str()->slug($state))),

                                TextInput::make('slug')
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(ignoreRecord: true)
                                    ->readOnly(true)
                                    ->helperText('URL-friendly version of the name.'),

                                TextInput::make('page_key')
                                    ->maxLength(255)
                                    ->helperText('Unique key for referencing this page in code.'),

                                Select::make('category_id')
                                    ->options(PageCategory::query()->pluck('name', 'id'))
                                    ->required()
                                    ->native(false),

                                TextInput::make('blade_view')
                                    ->maxLength(255)
                                    ->helperText('Custom blade view path if using a specific template.'),

                                Toggle::make('is_homepage')
                                    ->label('Set as Homepage')
                                    ->default(false)
                                    ->afterStateUpdated(function ($state, $set) {
                                        if ($state === true) {
                                            $home_page = CustomPage::query()->where('is_homepage', true)->first();
                                            if ($home_page) {
                                                Notification::make()
                                                    ->title('Error')
                                                    ->body('Only one page can be set as homepage. Please unset the current homepage first.')
                                                    ->danger()
                                                    ->send();

                                                // Revert the toggle back to false
                                                $set('is_homepage', false);

                                                // Optionally prevent further processing
                                                return;
                                            }
                                        }
                                    })
                                    ->helperText('Mark this page as the homepage. Only one page should be set as homepage.'),
                            ]),
                    ]),

                Section::make('SEO Information')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('meta_title')
                                    ->maxLength(255)
                                    ->helperText('SEO title (recommended: 50-60 characters)'),

                                Toggle::make('sitemap')
                                    ->label('Include in Sitemap')
                                    ->default(false)
                                    ->helperText('Add this page to the sitemap.xml'),
                            ]),

                        Textarea::make('meta_description')
                            ->maxLength(65535)
                            ->rows(3)
                            ->helperText('SEO description (recommended: 150-160 characters)'),
                    ]),

                Section::make('Content Keys')
                    ->schema([
                        Repeater::make('content_keys')
                            ->schema([
                                Select::make('type')
                                    ->label('Field Type')
                                    ->options([
                                        'input'    => 'Input',
                                        'textarea' => 'Textarea',
                                        'richtext' => 'Rich Text Editor',
                                    ])
                                    ->required()
                                    ->columnSpan(2)
                                    ->live(),

                                TextInput::make('key')
                                    ->required()
                                    ->label('Key')
                                    ->columnSpan(2),

                                TextInput::make('value_input')
                                    ->visible(fn($get) => $get('type') === 'input')
                                    ->columnSpan(4),

                                Textarea::make('value_textarea')
                                    ->rows(8)
                                    ->visible(fn($get) => $get('type') === 'textarea')
                                    ->columnSpan(4),

                                RichEditor::make('value_richtext')
                                    ->extraAttributes(['style' => 'min-height: 250px;'])
                                    ->resizableImages()
                                    ->visible(fn($get) => $get('type') === 'richtext')
                                    ->columnSpan(4),
                            ])
                            ->columns(4)
                            ->reorderable()
                            ->cloneable()
                            ->collapsible()
                            ->addActionLabel('Add Content Key'),

                    ])
                    ->collapsible(),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        // return CustomPagesTable::configure($table);
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('name')->searchable()->sortable()->limit(30),
                TextColumn::make('slug')->searchable()->copyable()->copyMessage('Slug copied')->limit(30),
                TextColumn::make('page_key')->searchable()->badge()->color('gray'),
                SelectColumn::make('category_id')->options(PageCategory::query()->pluck('name', 'id'))->sortable(),
                IconColumn::make('sitemap')->boolean()->sortable(),
                TextColumn::make('created_at')->dateTime('M d, Y')->sortable()->toggleable(),
                TextColumn::make('deleted_at')->dateTime('M d, Y')->sortable()->toggleable(isToggledHiddenByDefault: true),
            ])->filters([
            Tables\Filters\SelectFilter::make('category_id')->options(PageCategory::query()->pluck('name', 'id')),
            Tables\Filters\TernaryFilter::make('sitemap')->label('Sitemap Inclusion'),
            Tables\Filters\TrashedFilter::make(),
        ])
            ->recordActions([
                ViewAction::make()->slideOver(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                CreateAction::make(),
            ])->defaultSort('created_at', 'desc');
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
            'index'  => ListCustomPages::route('/'),
            'create' => CreateCustomPage::route('/create'),
            'edit'   => EditCustomPage::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
