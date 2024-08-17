<?php

namespace App\Filament\Resources\PemilikDenggunganResource\Pages;

use App\Filament\Resources\PemilikDenggunganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPemilikDenggungan extends EditRecord
{
    protected static string $resource = PemilikDenggunganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
