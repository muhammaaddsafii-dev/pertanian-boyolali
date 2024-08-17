<?php

namespace App\Filament\Resources\PenggarapJipanganResource\Pages;

use App\Filament\Resources\PenggarapJipanganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenggarapJipangan extends EditRecord
{
    protected static string $resource = PenggarapJipanganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
