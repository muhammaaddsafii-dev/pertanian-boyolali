<?php

namespace App\Filament\Resources\BanyudonoResource\Pages;

use App\Filament\Resources\BanyudonoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBanyudonos extends ListRecords
{
    protected static string $resource = BanyudonoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
