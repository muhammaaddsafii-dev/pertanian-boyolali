<?php

namespace App\Filament\Resources\PenyewaDukuhResource\Pages;

use App\Filament\Resources\PenyewaDukuhResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenyewaDukuh extends EditRecord
{
    protected static string $resource = PenyewaDukuhResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
