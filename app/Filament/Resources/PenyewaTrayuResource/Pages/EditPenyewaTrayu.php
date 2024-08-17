<?php

namespace App\Filament\Resources\PenyewaTrayuResource\Pages;

use App\Filament\Resources\PenyewaTrayuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenyewaTrayu extends EditRecord
{
    protected static string $resource = PenyewaTrayuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
