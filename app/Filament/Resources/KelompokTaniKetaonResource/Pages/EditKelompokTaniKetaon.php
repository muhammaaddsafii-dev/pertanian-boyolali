<?php

namespace App\Filament\Resources\KelompokTaniKetaonResource\Pages;

use App\Filament\Resources\KelompokTaniKetaonResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKelompokTaniKetaon extends EditRecord
{
    protected static string $resource = KelompokTaniKetaonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
