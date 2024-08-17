<?php

namespace App\Filament\Resources\KelompokTaniBangakResource\Pages;

use App\Filament\Resources\KelompokTaniBangakResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKelompokTaniBangak extends EditRecord
{
    protected static string $resource = KelompokTaniBangakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
