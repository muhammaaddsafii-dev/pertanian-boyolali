<?php

namespace App\Filament\Resources\BatanLogResource\Pages;

use App\Filament\Resources\BatanLogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBatanLog extends EditRecord
{
    protected static string $resource = BatanLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
