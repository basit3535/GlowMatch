<?php
namespace App\Filament\Resources\CustomPages\Pages;

use App\Filament\Resources\CustomPages\CustomPageResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\File;

class CreateCustomPage extends CreateRecord
{
    protected static string $resource = CustomPageResource::class;

    protected function afterCreate(): void
    {
        $record = $this->record;
        $slug       = $record->slug;
        $bladeView = $record->blade_view;
        $pageType = $record->page_type;
        $viewBlade   = resource_path("views/custom_pages/{$pageType}/{$bladeView}.blade.php");
        $viewPath   = resource_path("views/custom_pages/{$pageType}");
        // dd($viewBlade);
        if (!File::exists($viewBlade)) {
            File::put($viewBlade, $this->generateBladeTemplate($record));
        }
    }

    protected function generateBladeTemplate($record): string
    {
        return <<<BLADE
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{$record->name}</h1>

    {{-- Page Content --}}
</div>
@endsection
BLADE;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
