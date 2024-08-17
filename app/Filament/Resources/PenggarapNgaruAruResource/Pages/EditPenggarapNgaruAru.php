<?php

namespace App\Filament\Resources\PenggarapNgaruAruResource\Pages;

use App\Filament\Resources\PenggarapNgaruAruResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenggarapNgaruAru extends EditRecord
{
    protected static string $resource = PenggarapNgaruAruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
