<?php

namespace App\Filament\Resources\PenggarapTrayuResource\Pages;

use App\Filament\Resources\PenggarapTrayuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenggarapTrayu extends EditRecord
{
    protected static string $resource = PenggarapTrayuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
