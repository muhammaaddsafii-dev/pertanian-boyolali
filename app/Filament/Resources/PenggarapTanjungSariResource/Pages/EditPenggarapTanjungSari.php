<?php

namespace App\Filament\Resources\PenggarapTanjungSariResource\Pages;

use App\Filament\Resources\PenggarapTanjungSariResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenggarapTanjungSari extends EditRecord
{
    protected static string $resource = PenggarapTanjungSariResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
