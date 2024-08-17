<?php

namespace App\Filament\Resources\PenyewaJembunganResource\Pages;

use App\Filament\Resources\PenyewaJembunganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenyewaJembungan extends EditRecord
{
    protected static string $resource = PenyewaJembunganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
