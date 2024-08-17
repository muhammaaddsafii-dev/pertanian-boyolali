<?php

namespace App\Filament\Resources\PemilikDukuhResource\Pages;

use App\Filament\Resources\PemilikDukuhResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPemilikDukuh extends EditRecord
{
    protected static string $resource = PemilikDukuhResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
