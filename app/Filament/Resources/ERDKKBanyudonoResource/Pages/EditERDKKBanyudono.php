<?php

namespace App\Filament\Resources\ERDKKBanyudonoResource\Pages;

use App\Filament\Resources\ERDKKBanyudonoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditERDKKBanyudono extends EditRecord
{
    protected static string $resource = ERDKKBanyudonoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
