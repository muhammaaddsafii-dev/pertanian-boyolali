<?php

namespace App\Filament\Resources\PemilikKetaonResource\Pages;

use App\Filament\Resources\PemilikKetaonResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPemilikKetaon extends EditRecord
{
    protected static string $resource = PemilikKetaonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
