<?php

namespace App\Filament\Resources\PenyewaKetaonResource\Pages;

use App\Filament\Resources\PenyewaKetaonResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenyewaKetaon extends EditRecord
{
    protected static string $resource = PenyewaKetaonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
