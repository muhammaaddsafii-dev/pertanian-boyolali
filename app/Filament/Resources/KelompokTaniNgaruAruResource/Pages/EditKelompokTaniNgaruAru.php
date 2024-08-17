<?php

namespace App\Filament\Resources\KelompokTaniNgaruAruResource\Pages;

use App\Filament\Resources\KelompokTaniNgaruAruResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKelompokTaniNgaruAru extends EditRecord
{
    protected static string $resource = KelompokTaniNgaruAruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
