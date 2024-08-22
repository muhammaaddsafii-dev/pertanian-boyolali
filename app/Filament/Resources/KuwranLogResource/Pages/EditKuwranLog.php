<?php

namespace App\Filament\Resources\KuwranLogResource\Pages;

use App\Filament\Resources\KuwranLogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKuwranLog extends EditRecord
{
    protected static string $resource = KuwranLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
