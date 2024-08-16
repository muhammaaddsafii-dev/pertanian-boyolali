<?php

namespace App\Filament\Resources\SambonResource\Pages;

use App\Filament\Resources\SambonResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSambon extends EditRecord
{
    protected static string $resource = SambonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
