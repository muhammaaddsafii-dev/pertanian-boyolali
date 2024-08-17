<?php

namespace App\Filament\Resources\PenggarapCangkringanResource\Pages;

use App\Filament\Resources\PenggarapCangkringanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenggarapCangkringan extends EditRecord
{
    protected static string $resource = PenggarapCangkringanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
