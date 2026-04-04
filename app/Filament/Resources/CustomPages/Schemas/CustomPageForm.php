<?php

namespace App\Filament\Resources\CustomPages\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CustomPageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name'),
                TextInput::make('blade_view'),
                TextInput::make('slug'),
                TextInput::make('page_key'),
                Select::make('page_type')
                    ->options([
            'primary_page' => 'Primary page',
            'palette_page' => 'Palette page',
            'season_page' => 'Season page',
        ]),
                TextInput::make('meta_title'),
                Textarea::make('meta_description')
                    ->columnSpanFull(),
                Toggle::make('sitemap')
                    ->required(),
                Textarea::make('content_keys')
                    ->columnSpanFull(),
            ]);
    }
}
