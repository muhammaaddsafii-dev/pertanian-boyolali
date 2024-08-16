<?php

namespace App\Filament\Resources\CangkringanResource\Pages;

use App\Filament\Resources\CangkringanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCangkringans extends ListRecords
{
    protected static string $resource = CangkringanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
