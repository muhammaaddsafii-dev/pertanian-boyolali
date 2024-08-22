<?php

namespace App\Filament\Resources\CangkringanLogResource\Pages;

use App\Filament\Resources\CangkringanLogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCangkringanLog extends EditRecord
{
    protected static string $resource = CangkringanLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
