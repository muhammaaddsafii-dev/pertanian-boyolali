<?php

namespace App\Filament\Resources\PenggarapBatanResource\Pages;

use App\Filament\Resources\PenggarapBatanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenggarapBatan extends EditRecord
{
    protected static string $resource = PenggarapBatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
