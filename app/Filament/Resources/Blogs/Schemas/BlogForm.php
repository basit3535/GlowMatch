<?php
namespace App\Filament\Resources\Blogs\Schemas;

use App\Filament\Forms\Components\MediaPicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Forms\Components\CodeEditor;
class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn($state, Set $set) => $set('slug', str()->slug($state)))
                    ->debounce(500),
                TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true)
                    ->helperText('URL-friendly version of the title.')
                    ->readOnly(true)
                    ->default(function ($get) {
                        if ($get('title')) {
                            return str()->slug($get('title'));
                        }
                        return null;
                    }),
                TextInput::make('meta_title'),
                TextInput::make('meta_description'),
                TextInput::make('language')
                    ->required(),
                Select::make('category_id')
                    ->relationship('category', 'title')
                    ->searchable()
                    ->preload()
                    ->nullable(),
                // CodeEditor::make('blog_content'),

                RichEditor::make('blog_content')
                    ->extraAttributes(['style' => 'min-height: 250px;'])
                    ->resizableImages()
                    ->required()
                    ->columnSpanFull(),
                Select::make('parent_id')
                    ->label('Parent Blog')
                    ->relationship('parent', 'title')
                    ->searchable()
                    ->preload()
                    ->nullable(),
                // FileUpload::make('image_id')
                //     ->image(),
                MediaPicker::make('image_id')
                    ->label('Image'),
                Toggle::make('status')
                    ->required(),
                Toggle::make('featured')
                    ->required(),
            ]);
    }
}
