<?php

namespace App\Filament\Resources\ERDKKBatanResource\Pages;

use App\Filament\Resources\ERDKKBatanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditERDKKBatan extends EditRecord
{
    protected static string $resource = ERDKKBatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
