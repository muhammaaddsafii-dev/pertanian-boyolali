<?php

namespace App\Filament\Resources\TrayuResource\Pages;

use App\Filament\Resources\TrayuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTrayu extends EditRecord
{
    protected static string $resource = TrayuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
