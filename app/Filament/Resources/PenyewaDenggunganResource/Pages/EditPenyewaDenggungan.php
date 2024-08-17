<?php

namespace App\Filament\Resources\PenyewaDenggunganResource\Pages;

use App\Filament\Resources\PenyewaDenggunganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenyewaDenggungan extends EditRecord
{
    protected static string $resource = PenyewaDenggunganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
