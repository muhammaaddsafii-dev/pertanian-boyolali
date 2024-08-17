<?php

namespace App\Filament\Resources\PenyewaBanyudonoResource\Pages;

use App\Filament\Resources\PenyewaBanyudonoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenyewaBanyudono extends EditRecord
{
    protected static string $resource = PenyewaBanyudonoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
