<?php

namespace App\Filament\Resources\PenyewaTanjungSariResource\Pages;

use App\Filament\Resources\PenyewaTanjungSariResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenyewaTanjungSari extends EditRecord
{
    protected static string $resource = PenyewaTanjungSariResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
