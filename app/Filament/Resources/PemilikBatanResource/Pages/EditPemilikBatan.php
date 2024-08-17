<?php

namespace App\Filament\Resources\PemilikBatanResource\Pages;

use App\Filament\Resources\PemilikBatanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPemilikBatan extends EditRecord
{
    protected static string $resource = PemilikBatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
