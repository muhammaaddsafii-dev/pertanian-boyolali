<?php

namespace App\Filament\Resources\KelompokTaniDukuhResource\Pages;

use App\Filament\Resources\KelompokTaniDukuhResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKelompokTaniDukuh extends EditRecord
{
    protected static string $resource = KelompokTaniDukuhResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
