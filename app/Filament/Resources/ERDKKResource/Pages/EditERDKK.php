<?php

namespace App\Filament\Resources\ERDKKResource\Pages;

use App\Filament\Resources\ERDKKResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditERDKK extends EditRecord
{
    protected static string $resource = ERDKKResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
