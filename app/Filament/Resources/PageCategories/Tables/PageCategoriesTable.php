<?php

namespace App\Filament\Resources\PageCategories\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;

class PageCategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // Text/Name fields
                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('description')
                    ->limit(50)
                    ->tooltip(fn (string $state): string => $state)
                    ->toggleable(isToggledHiddenByDefault: true),

                // Boolean field
                IconColumn::make('is_active')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger')
                    ->toggleable(isToggledHiddenByDefault: false),

                // Relationship field
                TextColumn::make('parent.name')
                    ->label('Parent Category')
                    ->placeholder('—')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),

                // Numeric field
                TextColumn::make('order')
                    ->numeric()
                    ->sortable()
                    ->alignRight()
                    ->toggleable(isToggledHiddenByDefault: true),

                // Color field - using dedicated ColorColumn for hex codes
                ColorColumn::make('color')
                    ->label('Color')
                    ->copyable() // Allows copying hex code
                    ->copyMessage('Color code copied')
                    ->copyMessageDuration(1500)
                    ->toggleable(isToggledHiddenByDefault: true),

                // Alternative: ColorColumn with custom display
                // ColorColumn::make('color')
                //     ->label('Color')
                //     ->copyable()
                //     ->tooltip(fn (string $state): string => $state) // Show hex on hover
                //     ->toggleable(isToggledHiddenByDefault: true),

                // Icon field
                IconColumn::make('icon')
                    ->icon(fn (string $state): string => $state)
                    ->toggleable(isToggledHiddenByDefault: true),

                // DateTime fields
                TextColumn::make('created_at')
                    ->dateTime('M j, Y H:i')
                    ->sortable()
                    ->since()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->dateTime('M j, Y H:i')
                    ->sortable()
                    ->since()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('order', 'asc')
            ->filters([
                SelectFilter::make('is_active')
                    ->options([
                        '1' => 'Active',
                        '0' => 'Inactive',
                    ])
                    ->label('Status'),

                SelectFilter::make('parent_id')
                    ->relationship('parent', 'name')
                    ->label('Parent Category')
                    ->placeholder('All Categories'),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
