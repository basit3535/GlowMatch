<?php

namespace App\Filament\Resources\Media\Schemas;

use App\Models\Media;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class MediaInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ImageEntry::make('path')
                    ->label('Media Preview')
                    ->disk('public')
                    ->size(300, 300, 'cover'),

                TextEntry::make('filename'),
                TextEntry::make('path'),
                TextEntry::make('dimensions'),
                TextEntry::make('format'),

                TextEntry::make('deleted_at')
                    ->dateTime()
                    ->placeholder('-')
                    ->visible(fn (Media $record): bool => $record->trashed()),

                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),

                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
