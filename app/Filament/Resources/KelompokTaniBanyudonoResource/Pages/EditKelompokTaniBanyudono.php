<?php

namespace App\Filament\Resources\KelompokTaniBanyudonoResource\Pages;

use App\Filament\Resources\KelompokTaniBanyudonoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKelompokTaniBanyudono extends EditRecord
{
    protected static string $resource = KelompokTaniBanyudonoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
