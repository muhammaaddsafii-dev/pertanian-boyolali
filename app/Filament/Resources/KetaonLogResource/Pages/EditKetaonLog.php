<?php

namespace App\Filament\Resources\KetaonLogResource\Pages;

use App\Filament\Resources\KetaonLogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKetaonLog extends EditRecord
{
    protected static string $resource = KetaonLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
