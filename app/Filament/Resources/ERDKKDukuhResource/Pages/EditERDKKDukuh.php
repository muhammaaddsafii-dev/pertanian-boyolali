<?php

namespace App\Filament\Resources\ERDKKDukuhResource\Pages;

use App\Filament\Resources\ERDKKDukuhResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditERDKKDukuh extends EditRecord
{
    protected static string $resource = ERDKKDukuhResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
