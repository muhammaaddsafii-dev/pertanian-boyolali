<?php

namespace App\Filament\Resources\KelompokTaniCangkringanResource\Pages;

use App\Filament\Resources\KelompokTaniCangkringanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKelompokTaniCangkringan extends EditRecord
{
    protected static string $resource = KelompokTaniCangkringanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
