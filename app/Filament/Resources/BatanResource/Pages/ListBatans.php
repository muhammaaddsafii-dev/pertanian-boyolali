<?php

namespace App\Filament\Resources\BatanResource\Pages;

use App\Filament\Resources\BatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBatans extends ListRecords
{
    protected static string $resource = BatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
