<?php

namespace App\Filament\Resources\ERDKKKuwranResource\Pages;

use App\Filament\Resources\ERDKKKuwranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditERDKKKuwran extends EditRecord
{
    protected static string $resource = ERDKKKuwranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
