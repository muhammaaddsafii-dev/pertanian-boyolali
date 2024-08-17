<?php

namespace App\Filament\Resources\PenggarapDenggunganResource\Pages;

use App\Filament\Resources\PenggarapDenggunganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenggarapDenggungan extends EditRecord
{
    protected static string $resource = PenggarapDenggunganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
