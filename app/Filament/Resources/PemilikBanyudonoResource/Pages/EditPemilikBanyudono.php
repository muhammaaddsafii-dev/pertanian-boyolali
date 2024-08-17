<?php

namespace App\Filament\Resources\PemilikBanyudonoResource\Pages;

use App\Filament\Resources\PemilikBanyudonoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPemilikBanyudono extends EditRecord
{
    protected static string $resource = PemilikBanyudonoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
