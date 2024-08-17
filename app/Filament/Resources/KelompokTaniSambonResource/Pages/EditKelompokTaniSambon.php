<?php

namespace App\Filament\Resources\KelompokTaniSambonResource\Pages;

use App\Filament\Resources\KelompokTaniSambonResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKelompokTaniSambon extends EditRecord
{
    protected static string $resource = KelompokTaniSambonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
