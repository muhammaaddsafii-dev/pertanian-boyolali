<?php

namespace App\Filament\Resources\ERDKKDenggunganResource\Pages;

use App\Filament\Resources\ERDKKDenggunganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditERDKKDenggungan extends EditRecord
{
    protected static string $resource = ERDKKDenggunganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
