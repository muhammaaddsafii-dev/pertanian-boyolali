<?php

namespace App\Filament\Resources\PenyewaJipanganResource\Pages;

use App\Filament\Resources\PenyewaJipanganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenyewaJipangan extends EditRecord
{
    protected static string $resource = PenyewaJipanganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
