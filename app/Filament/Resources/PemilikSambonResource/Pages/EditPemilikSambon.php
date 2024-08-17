<?php

namespace App\Filament\Resources\PemilikSambonResource\Pages;

use App\Filament\Resources\PemilikSambonResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPemilikSambon extends EditRecord
{
    protected static string $resource = PemilikSambonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
