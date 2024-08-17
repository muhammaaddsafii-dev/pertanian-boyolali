<?php

namespace App\Filament\Resources\PenyewaNgaruAruResource\Pages;

use App\Filament\Resources\PenyewaNgaruAruResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenyewaNgaruAru extends EditRecord
{
    protected static string $resource = PenyewaNgaruAruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
