<?php

namespace App\Filament\Resources\PenyewaKuwranResource\Pages;

use App\Filament\Resources\PenyewaKuwranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenyewaKuwran extends EditRecord
{
    protected static string $resource = PenyewaKuwranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
