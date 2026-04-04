<?php
namespace App\Filament\Resources\Media\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Schemas\Schema;

class MediaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                FileUpload::make('file')
                    ->label('Upload Media')
                    ->image()
                    ->disk('local')
                    ->directory('livewire-tmp')
                    ->visibility('private')
                    ->required()
                    ->preserveFilenames(),

                Radio::make('convert_to')
                    ->label('Convert to format')
                    ->options([
                        'original' => 'Keep Original Format',
                        'webp'     => 'Convert to WebP (Modern & Smaller)',
                        'jpg'      => 'Convert to JPG/JPEG',
                        'png'      => 'Convert to PNG (Transparency support)',
                    ])
                    ->default('original')
                    ->inline(false)
                    ->required(),
            ]);
    }
}
