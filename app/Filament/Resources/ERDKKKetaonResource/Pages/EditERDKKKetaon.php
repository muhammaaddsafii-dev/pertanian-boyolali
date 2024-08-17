<?php

namespace App\Filament\Resources\ERDKKKetaonResource\Pages;

use App\Filament\Resources\ERDKKKetaonResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditERDKKKetaon extends EditRecord
{
    protected static string $resource = ERDKKKetaonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
