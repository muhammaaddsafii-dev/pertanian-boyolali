<?php

namespace App\Filament\Resources\TrayuResource\Pages;

use App\Filament\Resources\TrayuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTrayus extends ListRecords
{
    protected static string $resource = TrayuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
