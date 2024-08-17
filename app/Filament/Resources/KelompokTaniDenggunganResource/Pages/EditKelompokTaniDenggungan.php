<?php

namespace App\Filament\Resources\KelompokTaniDenggunganResource\Pages;

use App\Filament\Resources\KelompokTaniDenggunganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKelompokTaniDenggungan extends EditRecord
{
    protected static string $resource = KelompokTaniDenggunganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
