<?php

namespace App\Filament\Resources\PenggarapKetaonResource\Pages;

use App\Filament\Resources\PenggarapKetaonResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenggarapKetaon extends EditRecord
{
    protected static string $resource = PenggarapKetaonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
