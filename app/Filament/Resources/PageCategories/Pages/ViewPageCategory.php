<?php

namespace App\Filament\Resources\PageCategories\Pages;

use App\Filament\Resources\PageCategories\PageCategoryResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPageCategory extends ViewRecord
{
    protected static string $resource = PageCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
