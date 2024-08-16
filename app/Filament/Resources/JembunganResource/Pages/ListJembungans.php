<?php

namespace App\Filament\Resources\JembunganResource\Pages;

use App\Filament\Resources\JembunganResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJembungans extends ListRecords
{
    protected static string $resource = JembunganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
