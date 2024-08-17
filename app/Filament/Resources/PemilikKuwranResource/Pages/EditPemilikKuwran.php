<?php

namespace App\Filament\Resources\PemilikKuwranResource\Pages;

use App\Filament\Resources\PemilikKuwranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPemilikKuwran extends EditRecord
{
    protected static string $resource = PemilikKuwranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
