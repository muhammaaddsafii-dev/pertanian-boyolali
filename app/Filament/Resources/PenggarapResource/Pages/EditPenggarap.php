<?php

namespace App\Filament\Resources\PenggarapResource\Pages;

use App\Filament\Resources\PenggarapResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenggarap extends EditRecord
{
    protected static string $resource = PenggarapResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
