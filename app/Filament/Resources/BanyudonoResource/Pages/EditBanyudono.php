<?php

namespace App\Filament\Resources\BanyudonoResource\Pages;

use App\Filament\Resources\BanyudonoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBanyudono extends EditRecord
{
    protected static string $resource = BanyudonoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
