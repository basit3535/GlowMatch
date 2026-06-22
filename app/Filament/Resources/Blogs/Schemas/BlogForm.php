<?php
namespace App\Filament\Resources\Blogs\Schemas;

use App\Filament\Forms\Components\MediaPicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('meta_title'),
                TextInput::make('meta_description'),
                TextInput::make('language')
                    ->required(),
                // Select::make('category_id')
                //     ->options(BlogCategory::query()->pluck('name', 'id')),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('parent_id')
                    ->required()
                    ->numeric(),
                // FileUpload::make('image_id')
                //     ->image(),
                MediaPicker::make('image_id')
                    ->label('Image'),
                Toggle::make('status')
                    ->required(),
                // Toggle::make('featured')
                //     ->required(),
            ]);
    }
}
