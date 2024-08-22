<?php

namespace App\Filament\Resources\JipanganLogResource\Pages;

use App\Filament\Resources\JipanganLogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJipanganLog extends EditRecord
{
    protected static string $resource = JipanganLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
