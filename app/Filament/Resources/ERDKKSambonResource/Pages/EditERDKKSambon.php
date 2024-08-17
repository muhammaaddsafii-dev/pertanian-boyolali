<?php

namespace App\Filament\Resources\ERDKKSambonResource\Pages;

use App\Filament\Resources\ERDKKSambonResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditERDKKSambon extends EditRecord
{
    protected static string $resource = ERDKKSambonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
