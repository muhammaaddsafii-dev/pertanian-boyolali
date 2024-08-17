<?php

namespace App\Filament\Resources\PenggarapBangakResource\Pages;

use App\Filament\Resources\PenggarapBangakResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenggarapBangak extends EditRecord
{
    protected static string $resource = PenggarapBangakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
