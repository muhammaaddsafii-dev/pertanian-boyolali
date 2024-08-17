<?php

namespace App\Filament\Resources\KelompokTaniKuwranResource\Pages;

use App\Filament\Resources\KelompokTaniKuwranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKelompokTaniKuwran extends EditRecord
{
    protected static string $resource = KelompokTaniKuwranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
