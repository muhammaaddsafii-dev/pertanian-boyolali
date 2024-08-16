<?php

namespace App\Filament\Resources\KuwranResource\Pages;

use App\Filament\Resources\KuwranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKuwrans extends ListRecords
{
    protected static string $resource = KuwranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
