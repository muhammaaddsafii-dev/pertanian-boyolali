<?php

namespace App\Filament\Resources\PemilikTrayuResource\Pages;

use App\Filament\Resources\PemilikTrayuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPemilikTrayu extends EditRecord
{
    protected static string $resource = PemilikTrayuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
