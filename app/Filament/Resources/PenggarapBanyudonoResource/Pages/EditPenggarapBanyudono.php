<?php

namespace App\Filament\Resources\PenggarapBanyudonoResource\Pages;

use App\Filament\Resources\PenggarapBanyudonoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenggarapBanyudono extends EditRecord
{
    protected static string $resource = PenggarapBanyudonoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
