<?php

namespace App\Filament\Resources\KelompokTaniTrayuResource\Pages;

use App\Filament\Resources\KelompokTaniTrayuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKelompokTaniTrayu extends EditRecord
{
    protected static string $resource = KelompokTaniTrayuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
