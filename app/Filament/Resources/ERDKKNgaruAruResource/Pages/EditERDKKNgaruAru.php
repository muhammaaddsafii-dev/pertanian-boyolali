<?php

namespace App\Filament\Resources\ERDKKNgaruAruResource\Pages;

use App\Filament\Resources\ERDKKNgaruAruResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditERDKKNgaruAru extends EditRecord
{
    protected static string $resource = ERDKKNgaruAruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
