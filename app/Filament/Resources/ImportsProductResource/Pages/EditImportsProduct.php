<?php

namespace App\Filament\Resources\ImportsProductResource\Pages;

use App\Filament\Resources\ImportsProductResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditImportsProduct extends EditRecord
{
    protected static string $resource = ImportsProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
