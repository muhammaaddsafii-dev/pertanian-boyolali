<?php

namespace App\Filament\Resources\KuwranResource\Pages;

use App\Filament\Resources\KuwranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKuwran extends EditRecord
{
    protected static string $resource = KuwranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
