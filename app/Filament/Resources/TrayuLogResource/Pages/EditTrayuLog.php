<?php

namespace App\Filament\Resources\TrayuLogResource\Pages;

use App\Filament\Resources\TrayuLogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTrayuLog extends EditRecord
{
    protected static string $resource = TrayuLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
