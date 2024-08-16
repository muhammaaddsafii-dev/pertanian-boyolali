<?php

namespace App\Filament\Resources\DenggunganResource\Pages;

use App\Filament\Resources\DenggunganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDenggungan extends EditRecord
{
    protected static string $resource = DenggunganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
