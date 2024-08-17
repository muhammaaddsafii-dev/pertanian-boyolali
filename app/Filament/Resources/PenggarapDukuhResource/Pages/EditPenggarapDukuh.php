<?php

namespace App\Filament\Resources\PenggarapDukuhResource\Pages;

use App\Filament\Resources\PenggarapDukuhResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenggarapDukuh extends EditRecord
{
    protected static string $resource = PenggarapDukuhResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
