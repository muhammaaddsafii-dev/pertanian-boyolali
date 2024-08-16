<?php

namespace App\Filament\Resources\KetaonResource\Pages;

use App\Filament\Resources\KetaonResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKetaon extends EditRecord
{
    protected static string $resource = KetaonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
