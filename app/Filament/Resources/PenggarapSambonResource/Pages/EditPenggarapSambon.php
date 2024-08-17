<?php

namespace App\Filament\Resources\PenggarapSambonResource\Pages;

use App\Filament\Resources\PenggarapSambonResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenggarapSambon extends EditRecord
{
    protected static string $resource = PenggarapSambonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
