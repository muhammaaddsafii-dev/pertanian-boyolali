<?php

namespace App\Filament\Resources\KelompokTaniJipanganResource\Pages;

use App\Filament\Resources\KelompokTaniJipanganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKelompokTaniJipangan extends EditRecord
{
    protected static string $resource = KelompokTaniJipanganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
