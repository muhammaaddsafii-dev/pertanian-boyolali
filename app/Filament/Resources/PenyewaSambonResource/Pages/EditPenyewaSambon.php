<?php

namespace App\Filament\Resources\PenyewaSambonResource\Pages;

use App\Filament\Resources\PenyewaSambonResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenyewaSambon extends EditRecord
{
    protected static string $resource = PenyewaSambonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
