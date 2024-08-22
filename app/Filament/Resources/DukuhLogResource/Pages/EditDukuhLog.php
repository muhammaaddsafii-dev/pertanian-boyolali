<?php

namespace App\Filament\Resources\DukuhLogResource\Pages;

use App\Filament\Resources\DukuhLogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDukuhLog extends EditRecord
{
    protected static string $resource = DukuhLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
