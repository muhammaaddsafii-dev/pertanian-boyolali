<?php

namespace App\Filament\Resources\DenggunganLogResource\Pages;

use App\Filament\Resources\DenggunganLogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDenggunganLog extends EditRecord
{
    protected static string $resource = DenggunganLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
