<?php

namespace App\Filament\Resources\PemilikNgaruAruResource\Pages;

use App\Filament\Resources\PemilikNgaruAruResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPemilikNgaruAru extends EditRecord
{
    protected static string $resource = PemilikNgaruAruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
