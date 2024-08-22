<?php

namespace App\Filament\Resources\BanyudonoLogResource\Pages;

use App\Filament\Resources\BanyudonoLogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBanyudonoLog extends EditRecord
{
    protected static string $resource = BanyudonoLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
