<?php

namespace App\Filament\Resources\PenyewaBatanResource\Pages;

use App\Filament\Resources\PenyewaBatanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenyewaBatan extends EditRecord
{
    protected static string $resource = PenyewaBatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
