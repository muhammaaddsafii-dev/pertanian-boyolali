<?php

namespace App\Filament\Resources\DenggunganResource\Pages;

use App\Filament\Resources\DenggunganResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDenggungans extends ListRecords
{
    protected static string $resource = DenggunganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
