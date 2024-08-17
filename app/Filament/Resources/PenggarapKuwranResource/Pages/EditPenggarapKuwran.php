<?php

namespace App\Filament\Resources\PenggarapKuwranResource\Pages;

use App\Filament\Resources\PenggarapKuwranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenggarapKuwran extends EditRecord
{
    protected static string $resource = PenggarapKuwranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
