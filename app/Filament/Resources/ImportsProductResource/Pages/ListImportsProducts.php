<?php

namespace App\Filament\Resources\ImportsProductResource\Pages;

use App\Filament\Resources\ImportsProductResource;
use App\Filament\Resources\ImportsProductResource\Widgets\CustomerImports;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListImportsProducts extends ListRecords
{
    protected static string $resource = ImportsProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            CustomerImports::class,
        ];
    }
}
