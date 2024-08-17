<?php

namespace App\Filament\Resources\PenggarapJembunganResource\Pages;

use App\Filament\Resources\PenggarapJembunganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenggarapJembungan extends EditRecord
{
    protected static string $resource = PenggarapJembunganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
