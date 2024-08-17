<?php

namespace App\Filament\Resources\KelompokTaniBatanResource\Pages;

use App\Filament\Resources\KelompokTaniBatanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKelompokTaniBatan extends EditRecord
{
    protected static string $resource = KelompokTaniBatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
