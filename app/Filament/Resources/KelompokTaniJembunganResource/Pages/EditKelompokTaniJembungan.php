<?php

namespace App\Filament\Resources\KelompokTaniJembunganResource\Pages;

use App\Filament\Resources\KelompokTaniJembunganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKelompokTaniJembungan extends EditRecord
{
    protected static string $resource = KelompokTaniJembunganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
