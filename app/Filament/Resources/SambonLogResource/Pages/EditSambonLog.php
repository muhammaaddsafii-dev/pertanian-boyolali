<?php

namespace App\Filament\Resources\SambonLogResource\Pages;

use App\Filament\Resources\SambonLogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSambonLog extends EditRecord
{
    protected static string $resource = SambonLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
