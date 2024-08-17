<?php

namespace App\Filament\Resources\ERDKKTrayuResource\Pages;

use App\Filament\Resources\ERDKKTrayuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditERDKKTrayu extends EditRecord
{
    protected static string $resource = ERDKKTrayuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
