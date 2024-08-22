<?php

namespace App\Filament\Resources\JembunganLogResource\Pages;

use App\Filament\Resources\JembunganLogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJembunganLog extends EditRecord
{
    protected static string $resource = JembunganLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
