<?php

namespace App\Filament\Resources\KelompokTaniTanjungSariResource\Pages;

use App\Filament\Resources\KelompokTaniTanjungSariResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKelompokTaniTanjungSari extends EditRecord
{
    protected static string $resource = KelompokTaniTanjungSariResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
