<?php

namespace App\Filament\Resources\SambonResource\Pages;

use App\Filament\Resources\SambonResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSambons extends ListRecords
{
    protected static string $resource = SambonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
